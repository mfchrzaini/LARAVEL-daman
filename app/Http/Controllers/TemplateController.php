<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $template = Template::all();
        $user = auth()->user();
        if ($user->role === 'admin') {
            return view('admin.template', ['template' => $template]);
        } else {
            return view('dashboard.formulir', ['template' => $template]);
        }
        
        
    }

    public function uploadtemplate()
    {
        return view('admin.uploadtemplate');
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'nama_file' => 'required',
            'pdf' => 'required|file|max:2024'
        ]);
        $validated['pdf'] = $request->file('pdf')->store('templates');

        Template::create($validated);
        return redirect('/admin');
    }

    public function download(Template $template)
    {
        $data = Template::where('id', $template->id)->first();
        $path = public_path('storage/' . $data->pdf);
        $file_name = $template->nama_file . '.pdf';
        return Response::download($path, $file_name);
    }

    public function edit(Template $template)
    {
        $template = Template::where('id', $template->id)->get();
        return view('admin.edit', ['singleTemplate' => $template]);
    } 

    public function update(Request $request, Template $template)
    {
        Template::where('id', $template->id)->update([
            'nama_file' => $request->input('nama_file')
        ]);

        return redirect('/template');
    }

    public function destroy(Template $template)
    {
        $data = Template::where('id', $template->id)->first();
        $filepath = $data->pdf;
        Storage::delete($filepath);
        Template::where('id', $template->id)->delete();
        return redirect('/template');
    }
}
