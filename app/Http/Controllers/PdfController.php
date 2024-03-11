<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pdf;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function index()
    {
        $pdfs = Pdf::all();
        return view('pdfs.index', compact('pdfs'));
    }

    public function create()
    {
        return view('pdfs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required|mimes:pdf|max:20480', // 20MB
        ]);

        $filePath = $request->file('file')->store('pdfs', 'public');

        // Handle the cover image
        $coverImageData = $request->input('pdf-cover'); // This is the base64-encoded image

        // Decode the base64 string
        $coverImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $coverImageData));

        // Define a filename for the cover (You can customize this)
        $coverFilename = 'covers/' . basename($filePath, '.pdf') . '.jpg';

        // Store the decoded image
        Storage::disk('public')->put($coverFilename, $coverImage);

        Pdf::create([
            'title' => $request->title,
            'file_path' => $filePath,
            'cover_image' => $coverFilename,
        ]);

        return redirect()->route('admin.index')->with('success', 'PDF uploaded successfully!');
    }

    public function edit(Pdf $pdf)
    {
        return view('pdfs.edit', compact('pdf'));
    }

    public function update(Request $request, Pdf $pdf)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'nullable|mimes:pdf|max:20480',
        ]);

        $data = ['title' => $request->title];

        if ($request->hasFile('file')) {
            // Delete old file
            Storage::delete($pdf->file_path);

            // Store new file
            $filePath = $request->file('file')->store('pdfs');
            $data['file_path'] = $filePath;
        }

        $pdf->update($data);

        return redirect()->route('admin.index')->with('success', 'PDF updated successfully!');
    }

    public function destroy(Pdf $pdf)
    {
        // Delete file from storage
        Storage::delete($pdf->file_path);

        // Delete record from database
        $pdf->delete();

        return redirect()->route('admin.index')->with('success', 'PDF deleted successfully!');
    }
}
