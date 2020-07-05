<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.pages.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.pages.gallery.insert');
    }

    public function insert(Request $request)
    {
        $images = $request->image;

        $extension = $images->getClientOriginalExtension();
        $dir = '/home/designoble/public_html/uploads/gallery/';
        $filename = uniqid() . '_' . time() . '.' . $extension;
        $images->move($dir, $filename);
        Gallery::create([
            'image' => $filename
        ]);

        return response()->json(['uploaded' => '/home/designoble/public_html/uploads/gallery/'.$filename]);
        
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.pages.gallery.edit', compact('gallery'));
    }

    public function update(Request $request)
    {   $gallery = Gallery::find($request->id);
        $image = $request->file('gallery');
        $extension = $image->getClientOriginalExtension();
        $filename = uniqid() . '_' . time() . '.' . $extension;
        $dir = '/home/designoble/public_html/uploads/gallery/';
        $image->move($dir, $filename);
        @unlink($dir.$gallery->image);
        $gallery->image = $filename;
        $gallery->update();

        return redirect('/admin/gallery');

    }
}
