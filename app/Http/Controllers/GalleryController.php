<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('backend.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('backend.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|file|max:5120', // user-uploaded file
            'icon'  => 'nullable|string',        // edited image (base64 from toast)
        ]);

        $filePath = null;
        $destination = 'uploads/images/gallery/';

        if (!file_exists(public_path($destination))) {
            mkdir(public_path($destination), 0777, true);
        }

        // Build filename -> 15 July 2025_200212_gallery.jpg
        $filename = now()->format('d_m_Y_His') . '_gallery';

        // ✅ Priority: Edited image from Toast (icon)
        if ($request->icon && preg_match('/^data:image\/(\w+);base64,/', $request->icon, $type)) {
            $image = substr($request->icon, strpos($request->icon, ',') + 1);
            $image = base64_decode($image);
            $ext = strtolower($type[1]);

            $fullName = $filename . '.' . $ext;
            file_put_contents(public_path($destination . $fullName), $image);
            $filePath =  $fullName;
        }
        // ✅ Fallback: Normal file upload
        elseif ($request->hasFile('image')) {
            $file = $request->file('image');
            $fullName = $filename . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($destination), $fullName);
            $filePath =  $fullName;
        }

        Gallery::create([
            'title' => $request->title,
            'image' => $filePath,
        ]);

        return redirect()->route('galleries.index')->with('success', 'Gallery created successfully.');
    }

    public function show(Gallery $gallery)
    {
        return view('backend.gallery.show', compact('gallery'));
    }


    public function edit(Gallery $gallery)
    {
        return view('backend.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|file|max:5120',
            'icon'  => 'nullable|string',
        ]);

        $filePath = $gallery->image;
        $destination = 'uploads/images/gallery/';

        if (!file_exists(public_path($destination))) {
            mkdir(public_path($destination), 0777, true);
        }

        $filename = now()->format('d_m_Y_His') . '_gallery';

        // ✅ Priority: Edited image from Toast (icon)
        if ($request->icon && preg_match('/^data:image\/(\w+);base64,/', $request->icon, $type)) {
            if ($gallery->image && file_exists(public_path($gallery->image))) {
                unlink(public_path($gallery->image));
            }

            $image = substr($request->icon, strpos($request->icon, ',') + 1);
            $image = base64_decode($image);
            $ext = strtolower($type[1]);

            $fullName = $filename . '.' . $ext;
            file_put_contents(public_path($destination . $fullName), $image);

            $filePath =  $fullName;
        }
        // ✅ Fallback: Normal file upload
        elseif ($request->hasFile('image')) {
            if ($gallery->image && file_exists(public_path($gallery->image))) {
                unlink(public_path($gallery->image));
            }

            $file = $request->file('image');
            $fullName = $filename . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($destination), $fullName);

            $filePath =  $fullName;
        }

        $gallery->update([
            'title' => $request->title,
            'image' => $filePath,
        ]);

        return redirect()->route('galleries.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->image && file_exists(public_path($gallery->image))) {
            unlink(public_path($gallery->image));
        }
        $gallery->delete();

        return redirect()->route('galleries.index')->with('success', 'Gallery deleted successfully.');
    }
}
