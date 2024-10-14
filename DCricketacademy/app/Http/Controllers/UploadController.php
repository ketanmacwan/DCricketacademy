<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class UploadController extends Controller
{
    public function create(){
        return view('upload.form');
    }



    public function store(Request $request){

        $request->validate([
        'name' => 'required|alpha_num',
        'file' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts,qt|max:50000',
        'description' => 'required|alpha_num'
        ]);

        $fileUpload = new File;

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $file->move('uploads', $fileName);
            $fileUpload->name = $request->name;
            $fileUpload->description = $request->description;
            $fileUpload->file_path = $fileName;
            $fileUpload->save();

            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }

   }


   public function display()
{
    $files = File::all();
    return view('upload.display', compact('files'));
}

}
