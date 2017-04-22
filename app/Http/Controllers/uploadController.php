<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class uploadController extends Controller
{
    //
    public function index()
    {
        return view('upload.upload');
    }

    public function  store(Request $request)
    {
           if($request->hasFile('image')){
               $request->File('image');
             // return $request->image->extension();    // path . extension
              return $request->image->storeAs('public', 'bitfumes.jpg');    // path . extension
               //return $request->image->store('public'); //Store a image . 2way of storage
               return Storage::putFile('public/new', $request->file('image'));
           }else{
               return 'No File Selected';
           }
    }

    public  function  show()
    {
      // return Storage::allfiles('public');
       //return Storage::makeDirectory('make');
      //if (Storage::deleteDirectory('public/make')){
         // return 'deleted';
      //}
         //$url =Storage::url('bitfumes.jpeg');
        //return "<img src='".$url." ' />";

         //return Storage::size('public/bitfumes.jpeg');
         //return Storage::lastModified('public/bitfumes.jpeg');
         //return Storage::copy('public/bitfumes.jpeg','bitfumes.jpeg');
//           if(Storage::move('public/bitfumes.jpeg','bitfumes.jpeg')) {
//               return 'moved';
//           }

//           $rawContent = Storage::get('bitfumes.jpeg');
//               if(Storage::put('newImage2 .jpeg', $rawContent)){
//                   return  'File 2 is create ';
//               }

          if(Storage::delete('public/newImage2.jpeg')){
              return 'File deleted';
          }

    }
}
