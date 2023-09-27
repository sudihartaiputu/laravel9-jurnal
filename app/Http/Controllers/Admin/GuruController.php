<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Guru;
use Auth;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::paginate(10);
        return View('admin.guru.index', compact(['guru']));
    }
    public function create()
    {
        return View('admin.guru.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'username' => 'required|min:3|max:100',
            'nik' => 'required|numeric|min:3',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'email' => 'required|email',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $foto = $request->foto;
        $new_foto = time() . "_" . $foto->getClientOriginalName();
        $guru = Guru::create([
            'name' => $request->name,
            'username' => $request->username,
            'nik' => $request->nik,
            'nip' => $request->nip,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jk' => $request->jk,
            'level' => 'guru',
            'email' => $request->email,
            'foto' => 'img/guru/' . $new_foto,
            'password' => bcrypt('smanev'),
        ]);

        $foto->move('img/guru/', $new_foto);
        return redirect('admin/guru')->with('sukses', 'Guru berhasil ditambah!');
    }
    public function edit($id)
    {
        // $kategori = Kategori::all();
        // $tag = Tags::all();
        $guru = Guru::findorfail($id);
        return view('admin.guru.edit', compact('guru'));
    }
}
