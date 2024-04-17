<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use \Illuminate\Support\Facades\Auth;
use \App\Models\Permohonan;
use \Illuminate\Support\Facades\Hash;
use \App\Models\City;
use \App\Models\Berkas;
use Illuminate\Support\Facades\Response;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::where('nik', auth()->user()->nik)->get();
        return view('dashboard.index', compact('user'));
    }

    public function admin()
    {
        $user = User::where('nik', auth()->user()->nik)->get();
        return view('admin.index', compact('user'));
    }

    public function profile()
    {
        $user = User::where('nik', auth()->user()->nik)->get();
        $city = City::orderBy('kota', 'asc')->where('kota', '<>', $user[0]->domisili)->get();
        $check = auth()->user();
        if ($check->role === 'admin') {
            return view('admin.profile', compact('user', 'city'));
        } else {
            return view('dashboard.profile', compact('user', 'city'));
        }
    }

    public function status()
    {
        $permohonan = Permohonan::where('user_id', auth()->user()->nik)->orderBy('created_at', 'desc')->get();
        return view('dashboard.status', ['permohonan' => $permohonan]);
    }

    public function notifikasi()
    {
        $check = auth()->user();
        if ($check->role === 'admin') {
            return view('admin.notifikasi');
        } else {
            return view('dashboard.notifikasi');
        }
    }

    public function bantuan()
    {
        $check = auth()->user();
        if ($check->role === 'admin') {
            return view('admin.bantuan');
        } else {
            return view('dashboard.bantuan');
        }
    }


    public function detailstatus(Permohonan $permohonan)
    {
        $data = Permohonan::where('id', $permohonan->id)->get();
        $berkas = Berkas::where('permohonan_id', $permohonan->id)->get();
        return view('dashboard.detailstatus', compact('data', 'berkas'));
    }

    public function datadukungkia()
    {
        return view('dashboard.datadukung.kia');
    }

    public function datadukungkk()
    {
        return view('dashboard.datadukung.kk');
    }

    public function datadukunglahir()
    {
        return view('dashboard.datadukung.aktaLahir');
    }

    public function datadukungmati()
    {
        return view('dashboard.datadukung.aktaMati');
    }

    public function update(Request $request, User $user)
    {
        if ($request->has('password')) {
            $request->validate([
                'confirmpass' => 'same:password'
            ]);
        }

        User::where('nik', $user->nik)->update([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'telepon' => $request->input('telepon'),
            'email' => $request->input('email'),
            'domisili' => $request->input('domisili'),
            'password' => $request->input('password') ? Hash::make($request->input('password')) : $user->password,
        ]);
        return redirect('/profile');
    }

    public function destroy(User $user)
    {
        User::where('nik', $user->nik)->delete();
        Auth::logout();
        return redirect('/');
    }

    public function downloadberkas(Berkas $berkas)
    {
        $data = Berkas::where('id', $berkas->id)->first();
        $path = public_path('storage/' . $data->berkas);
        $file_name = $berkas->nama_file;
        return Response::download($path, $file_name);
    }
}
