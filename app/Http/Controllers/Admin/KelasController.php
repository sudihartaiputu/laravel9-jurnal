<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
Use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::paginate(10);
        return view('admin.kelas.index', compact('kelas'));
    }

   
    public function create()
    {
        return view('admin.kelas.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:3'
        ]);
        $kelas = Kelas::create([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
        ]);
        return redirect('/admin/kelas')->with('sukses', 'Kelas berhasil di simpan');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $kelas = Kelas::findorfail($id);
        return view('admin.kelas.edit', compact('kelas'));
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|min:3'
        ]);
        $kelas_data = [
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama)
        ];
        Kelas::whereId($id)->update($kelas_data);
        return redirect()->route('kelas.index')->with('sukses', 'Kelas berhasil di update');
    }

   
    public function destroy($id)
    {
        $kelas = Kelas::findorfail($id);
        $kelas->delete();
        return redirect()->back()->with('sukses', 'Kelas berhasil di hapus');
    }
}
