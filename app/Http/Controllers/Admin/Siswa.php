<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Siswa extends Controller
{
    public function index()
    {
     return View('admin.siswa.index');
    }
}
