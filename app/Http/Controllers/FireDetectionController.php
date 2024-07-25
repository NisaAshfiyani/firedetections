<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FireDetectionController extends Controller
{
    public function detect(Request $request)
    {
         // Validasi file input
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Ambil file dari request
        $file = $request->file('file');
        
        // Kirim file ke API Flask
        $response = Http::attach(
            'file', file_get_contents($file->getRealPath()), $file->getClientOriginalName()
        )->url('http://127.0.0.1:5000/upload');  // Ganti URL dengan endpoint Flask Anda

        // Cek status respons
        if ($response->successful()) {
            $data = $response->json();

            // Simpan data hasil deteksi ke log untuk debugging
            Log::info('Detection Results:', $data);

            // Konversi descriptions menjadi array jika belum
            $descriptions = is_array($data['descriptions']) ? $data['descriptions'] : [$data['descriptions']];

            // Tampilkan hasil deteksi di view
            return view('result', [
                'detectionResults' => $data['detection_results'],
                'descriptions' => $descriptions,
                'detectionMade' => $data['detection_made']
            ]);
        } else {
            // Tangani kesalahan jika API tidak merespons dengan benar
            return view('result', [
                'detectionResults' => ['No detection'],
                'descriptions' => ['No description'],
                'detectionMade' => false
            ]);
        }
    }
}
