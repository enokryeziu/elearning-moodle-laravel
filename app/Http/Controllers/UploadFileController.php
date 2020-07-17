<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;


class UploadFileController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'id' => 'required',
            'file_name' => 'required',
            'file_author' => 'required',
            'subject_id' => 'required',
            'uFile'=> 'required|max:10000'
        ]);

        if($request->hasFile('upFile')){
            
            $fileNameWithExt = $request->file('uFile')->getClientOriginalName();

            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('uFile')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('uFile')->storeAs('public/uFile' , $fileNameToStore);
        }else{
            $fileNameToStore = 'noFile';
        }

        $materials = new Materials;
       //to be modified
    }
}