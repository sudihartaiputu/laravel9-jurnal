<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Guru;

class Beranda extends Controller
{
     public function index()
    {
        $guru = Guru::count();
        return View('admin.beranda', compact(['guru']));
    }
}
