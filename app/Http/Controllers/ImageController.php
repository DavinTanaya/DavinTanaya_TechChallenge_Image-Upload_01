<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(){
        return view('addImage');
    }

    public function create(Request $request){
        // dd($request);
        // $request->validate([
        //     'itempic' => 'mimes:jpg, jpeg, png',
        // ]);

        $path = $request->file('itempic');

        $img = Image::create([
            'image_path' => $path,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $fileName = $img->id . $path->getClientOriginalName();
        $path->storeAs('public/images', $fileName);
        $img->image_path = 'images/' . $fileName;
        $img->save();

        return redirect('/')->with('success', 'Image successfully uploaded');
    }

    public function deleteImage(Request $request, $id){

        Image::destroy($id);

        return redirect('/')->with('success', 'Image successfully deleted');
    }
}
