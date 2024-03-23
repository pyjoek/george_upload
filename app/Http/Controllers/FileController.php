<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Gog;

class FileController extends Controller
{
    // public function download($id)
    // {
    //     $file = Gog::findOrFail($id);
    //     return Storage::download('uploads/' . $file->filename, $file->original_filename);
    // }
    public function download($id)
    {
        $request->validate([
            'image' => 'required|max:2048', // adjust max size as needed
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        return back()
            ->with('success', 'Image uploaded successfully.')
            ->with('image', $imageName);
    }

}