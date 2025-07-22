<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $rules = [
            'file' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        
        if ($validator->fails()) {
            return response()->json($validator->errors()->first());
        }
        
        $imgpath = Storage::disk('public_upload')->put('tinymce', $request->file);
        // return response()->json(['location' => asset('uploads') . '/' . $imgpath]);
        return response()->json(['location' => url('uploads/' . $imgpath)]);
        
    }
}
