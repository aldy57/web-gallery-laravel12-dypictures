<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class FotoController extends Controller
{
    public function index()
    {
        // Ambil semua data foto dari database, urutkan dari yang terbaru
        $fotos = Foto::orderBy('created_at', 'desc')->get();

        // Hitung total foto
        $totalFotos = Foto::count();

        // Kirim data ke view dashboard
        return view('accounts.dashboard', [
            'fotos' => $fotos,
            'totalFotos' => $totalFotos
        ]);
    }

    public function showGallery()
    {
        // Ambil semua foto dari database, urutkan dari yang terbaru
        $fotos = Foto::orderBy('created_at', 'desc')->get();

        // Kirim data ke view foto
        return view('foto', [
            'fotos' => $fotos
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'nama_foto' => 'required|string|max:150',
            'lokasi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif'
        ], [
            // Pesan error
            'nama_foto.required' => 'Nama foto wajib diisi',
            'lokasi.required' => 'Lokasi wajib diisi',
            'gambar.required' => 'File gambar wajib diupload',
            'gambar.image' => 'File harus berupa gambar',
            'gambar.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif'
        ]);

        try {
            // Proses upload gambar
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');

                // Buat nama file unik dengan timestamp
                $filename = time() . '_' . $file->getClientOriginalName();

                // Tentukan path untuk menyimpan gambar
                $destinationPath = public_path('uploads/fotos');

                // Buat folder jika belum ada
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath, 0755, true);
                }

                // Pindahkan file ke folder uploads/fotos
                $file->move($destinationPath, $filename);

                // Simpan data ke database
                Foto::create([
                    'nama_foto' => $request->nama_foto,
                    'lokasi' => $request->lokasi,
                    'gambar' => 'uploads/fotos/' . $filename
                ]);

                // Redirect kembali dengan pesan sukses
                return redirect()->route('dashboard')->with('success', 'Foto berhasil diupload!');
            }

            return back()->with('error', 'File gambar tidak ditemukan!');

        } catch (\Exception $e) {
            // Jika terjadi eror sistem, maka pesan errornya akan tercatat di storage/logs/laravel.log
            Log::error('Error upload foto: ' . $e->getMessage());

            // Hapus file jika sudah terupload tapi gagal save ke database
            if (isset($filename) && File::exists(public_path('uploads/fotos/' . $filename))) {
                File::delete(public_path('uploads/fotos/' . $filename));
            }

            return back()->with('error', 'Gagal mengupload foto. Silakan coba lagi.');
        }
    }

    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $request->validate([
            'nama_foto' => 'required|string|max:150',
            'lokasi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif'
        ], [
            // Pesan error
            'nama_foto.required' => 'Nama foto wajib diisi',
            'lokasi.required' => 'Lokasi wajib diisi',
            'gambar.image' => 'File harus berupa gambar',
            'gambar.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif'
        ]);

        try {
            // Cari foto berdasarkan ID di database
            $foto = Foto::findOrFail($id);

            // Simpan path gambar lama untuk rollback untuk jaga-jaga
            $oldImage = $foto->gambar;

            // Update data
            $foto->nama_foto = $request->nama_foto;
            $foto->lokasi = $request->lokasi;

            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $filename = time() . '_' . $file->getClientOriginalName();
                $destinationPath = public_path('uploads/fotos');

                // Buat folder jika belum ada
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath, 0755, true);
                }

                // Upload file baru
                $file->move($destinationPath, $filename);
                $foto->gambar = 'uploads/fotos/' . $filename;

                // Simpan perubahan ke database
                $foto->save();

                // Hapus gambar lama setelah berhasil save
                if ($oldImage && File::exists(public_path($oldImage))) {
                    File::delete(public_path($oldImage));
                }
            } else {
                // Simpan perubahan tanpa update gambar
                $foto->save();
            }

            // Redirect dengan pesan sukses
            return redirect()->route('dashboard')->with('success', 'Foto berhasil diupdate!');

        } catch (\Exception $e) {
            // Jika terjadi eror sistem, maka pesan errornya akan tercatat di storage/logs/laravel.log
            Log::error('Error update foto: ' . $e->getMessage());

            // Rollback: hapus file baru jika ada dan gagal save
            if (isset($filename) && File::exists(public_path('uploads/fotos/' . $filename))) {
                File::delete(public_path('uploads/fotos/' . $filename));
            }

            return back()->with('error', 'Gagal mengupdate foto. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        try {
            // Cari foto berdasarkan ID
            $foto = Foto::findOrFail($id);

            // Simpan path gambar untuk dihapus
            $imagePath = $foto->gambar;

            // Hapus data dari database terlebih dahulu
            $foto->delete();

            // Hapus file gambar dari storage setelah berhasil delete dari database
            if ($imagePath && File::exists(public_path($imagePath))) {
                File::delete(public_path($imagePath));
            }

            // Redirect dengan pesan sukses
            return redirect()->route('dashboard')->with('success', 'Foto berhasil dihapus!');

        } catch (\Exception $e) {
            // Log error untuk debugging
            Log::error('Error delete foto: ' . $e->getMessage());

            return back()->with('error', 'Gagal menghapus foto. Silakan coba lagi.');
        }
    }
}

