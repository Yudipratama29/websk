<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\mahasiswa;
use App\Models\jurusan;

class MahasiswaController extends Controller
{
    public function index()
    {
        // $mhs = DB::table('mhs')
        // ->select("mhs.id","nim", "mhs.nama", "jurusan_id", "jurusan.nama AS jurusan_nama")
        // ->join('jurusan', 'jurusan.id', '=', 'mhs.jurusan_id')
        // ->get();

        $mhs = Mahasiswa::with('jurusan')->get();

        return view('mahasiswa.index', ['data' => $mhs]);
    }

    public function create()
    {
        // $jurusan = DB::table('jurusan')->get();
        $jurusan = Jurusan::all();

        return view('mahasiswa.create', ['jurusan' => $jurusan]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => ['required', 'min: 8', 'max : 10'],
            'nama' => 'required',
            'jurusan' => ['required', 'exists:jurusan,id'],
        ]);

        $mhs = Mahasiswa::create([
            'nim' => $validated['nim'],
            'nama' => $validated['nama'],
            'jurusan_id' => $validated['jurusan'],
        ]);

            return redirect(url('/mahasiswa'));

    }
    public function update(Request $request, Mahasiswa $mhs)
    {
        // $mhs = Mahasiswa::find($id);

        $mhs->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan_id' => $request->jurusan,
        ]);

        // DB::table('mhs')
        // ->where('id', $id)
        // ->update([
        //     'nim' => $request->nim,
        //     'nama' => $request->nama,
        //     'jurusan_id' => $request->jurusan,
        // ]);

        // $mhs-save()

        return redirect(url('/mahasiswa'));

    }

    public function destroy(Mahasiswa $mhs)
    {
        // DB::table('mhs')
        // ->where('id', $id)
        // ->delete();

        // $mhs = Mahasiswa::find($id);

        $mhs->delete();

        return redirect(url('/mahasiswa'));

    }

    public function edit(Mahasiswa $mhs)
    {
        // $mhs = DB::table('mhs')
        // ->select("mhs.id","nim", "mhs.nama", "jurusan_id", "jurusan.nama AS jurusan_nama")
        // ->join('jurusan', 'jurusan.id', '=', 'mhs.jurusan_id')
        // ->where('mhs.id', $id)
        // ->first();


        // $jurusan = DB::table('jurusan')->get();

        // $mhs = Mahasiswa::find($id);

        $jurusan = Jurusan::all();

        return view('mahasiswa.edit', ['data' => $mhs, 'id' => $mhs->id, 'jurusan' => $jurusan]);
    }

    public function show($id)
    {
        $mhs = DB::table('mhs')
        ->select("mhs.id","nim", "mhs.nama", "jurusan_id", "jurusan.nama AS jurusan_nama")
        ->join('jurusan', 'jurusan.id', '=', 'mhs.jurusan_id')
        ->where('mhs.id', $id)
        ->first();

        return view('mahasiswa.show', ['data' => $mhs]);
    }
}
