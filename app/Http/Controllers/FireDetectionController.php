<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class FireDetectionController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,mp4|max:20480', // Validasi file
        ]);

        // Simpan file yang diunggah
        $file = $request->file('file');
        $filePath = $file->store('uploads');

        // Kirim file ke API Flask
        $response = Http::post('http://localhost:5000/process', [
            'file_path' => storage_path('app/' . $filePath),
        ]);

        // Tangani respons dari API Flask
        $data = $response->json();

        if ($response->successful()) {
            return view('result', [
                'detection_made' => $data['detection_made'],
                'descriptions' => $data['descriptions'],
            ]);
        } else {
            return back()->withErrors(['error' => $data['error'] ?? 'Terjadi kesalahan saat memproses file.']);
        }
    }
}
