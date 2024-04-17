<?php

namespace App\Http\Controllers;

use App\Models\Evidence;
use \App\Models\Permohonan;
use \Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use \App\Models\Berkas;

class PermohonanController extends Controller
{
    public function layanan()
    {
        return view('dashboard.layanan');
    }

    public function kk()
    {
        return view('dashboard.layanan.kk');
    }

    public function kia()
    {
        return view('dashboard.layanan.kia');
    }

    public function aktaLahir()
    {
        return view('dashboard.layanan.lahir');
    }

    public function aktaKematian()
    {
        return view('dashboard.layanan.mati');
    }


    public function daftarpermohonan()
    {
        $dataPermohonan = DB::table('permohonans')
            ->join('users', 'permohonans.user_id', '=', 'users.nik')
            ->where('users.domisili', auth()->user()->domisili)
            ->where('permohonans.status', 'proses' )
            ->select('permohonans.*')->orderBy('created_at', 'DESC')
            ->get();

        return view('admin.permohonan', ['data' => $dataPermohonan]);
    }

    public function detailpermohonan(Permohonan $permohonan)
    {
        $evd = DB::table('evidence')
            ->join('permohonans', 'evidence.permohonan_id', '=', 'permohonans.id')
            ->where('evidence.permohonan_id', $permohonan->id)
            ->select('evidence.*')
            ->get();
        // dd($evd);
        $id = Permohonan::where('id', $permohonan->id)->get();
        // dd($id);
        return view('admin.detail', compact('evd', 'id'));

    }

    public function berkasSelesai(Request $request)
    {
        $data = $request->only(['pesan', 'status']);
        $id = $request['permohonan_id'];
        Permohonan::where('id', $request['permohonan_id'])->update([
            'pesan' => $data['pesan'],
            'status' => $data['status']
        ]);

        if ($request->hasFile('berkas')) {
            $berkas = $request->file('berkas')->store('berkasSelesai');
            Berkas::create([
                'permohonan_id' => $id,
                'nama_file' => $request->file('berkas')->getClientOriginalName(),
                'berkas' => $berkas
            ]);
        }

        return redirect('/admin');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required',
            'nama_lengkap' => 'required',
            'jenis_berkas' => 'required'
        ]);

        $validatedEVD = $request->validate([
            'berkas.*' => 'required|file|max:2024'
        ]);

        $validated['status'] = 'proses';
        $validated['user_id'] = strval(Auth::id());
        // dd($validated); 
        $permohonan = Permohonan::create($validated);

        $permohonanId = $permohonan->id;
        // dd($arrayberkas);
        foreach ($validatedEVD as $berkas) {
            foreach ($berkas as $b) {
                // dd($b);
                $validatedEVD['bukti'] = $b->store('evidence');
                $validatedEVD['nama_file'] = $b->getClientOriginalName();
                $validatedEVD['permohonan_id'] = $permohonanId;
                // dd($validatedEVD);
                Evidence::create($validatedEVD);
            }
        }

        return view('dashboard.layanan.layananselesai');
    }

    public function download(Evidence $evidence)
    {
        $data = Evidence::where('id', $evidence->id)->first();
        $path = public_path('storage/' . $data->bukti);
        $file_name = $evidence->nama_file;
        return Response::download($path, $file_name);
    }
}
