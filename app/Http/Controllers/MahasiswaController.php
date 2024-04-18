<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    public function index(): View
    {
        //get posts
        $mahasiswas = Mahasiswa::latest()->paginate(5);

        //render view with posts
        return view('mahasiswas.index', compact('mahasiswas'));
    }
    public function create(): View
{
    return view('mahasiswas.create'); // Sesuaikan dengan view Anda untuk form tambah mahasiswa
}

/**
 * store
 *
 * @param  mixed $request
 * @return RedirectResponse
 */
public function store(Request $request): RedirectResponse
{
    // Validate form
    $this->validate($request, [
        'nim'              => 'required|integer|unique:mahasiswas',
        'nama'             => 'required|string|max:255',
        'alamat'           => 'required|string|max:255',
        'nomorhp'          => 'required|numeric',
        'motivasi_kuliah'  => 'required|string',
    ]);

    // Create mahasiswa
    Mahasiswa::create([
        'nim'             => $request->nim,
        'nama'            => $request->nama,
        'alamat'          => $request->alamat,
        'nomorhp'         => $request->nomorhp,
        'motivasi_kuliah' => $request->motivasi_kuliah,
    ]);

    // Redirect to index
    return redirect()->route('mahasiswas.index')->with(['success' => 'Data Mahasiswa Berhasil Disimpan!']);
}

    public function show(string $id): View
    {
        //get post by ID
        $mahasiswa = Mahasiswa::findOrFail($id);

        //render view with post
        return view('mahasiswas.show', compact('mahasiswa'));
    }

    public function edit(string $id): View
{
    // Dapatkan mahasiswa berdasarkan ID
    $mahasiswa = Mahasiswa::findOrFail($id);

    // Render view dengan data mahasiswa
    return view('mahasiswas.edit', compact('mahasiswa'));
}

public function update(Request $request, $id): RedirectResponse
{
    // Validate form
    $this->validate($request, [
        'nim'              => 'required|integer|unique:mahasiswas,nim,' . $id,
        'nama'             => 'required|string|max:255',
        'alamat'           => 'required|string|max:255',
        'nomorhp'          => 'required|numeric',
        'motivasi_kuliah'  => 'required|string',
    ]);

    // Dapatkan mahasiswa berdasarkan ID
    $mahasiswa = Mahasiswa::findOrFail($id);

    // Update data mahasiswa
    $mahasiswa->update([
        'nim'             => $request->nim,
        'nama'            => $request->nama,
        'alamat'          => $request->alamat,
        'nomorhp'         => $request->nomorhp,
        'motivasi_kuliah' => $request->motivasi_kuliah,
    ]);

    // Redirect ke index dengan pesan sukses
    return redirect()->route('mahasiswas.index')->with(['success' => 'Data Mahasiswa Berhasil Diubah!']);
}

public function destroy($id): RedirectResponse
{
    // Dapatkan mahasiswa berdasarkan ID
    $mahasiswa = Mahasiswa::findOrFail($id);

    // Hapus data mahasiswa
    $mahasiswa->delete();

    // Redirect ke index dengan pesan sukses
    return redirect()->route('mahasiswas.index')->with(['success' => 'Data Mahasiswa Berhasil Dihapus!']);
}
}
