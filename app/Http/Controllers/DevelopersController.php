<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Developers;

class DevelopersController extends Controller
{
    public function index() 
    {
        $datas = Developers::all();
        return view('admin.pages.developers.index', compact('datas'));
    }

    public function create()
    {
        // fungsi untuk menampilkan form create
    }

    public function store() 
    {
        // fungsi untuk menjalankan proses create
    }

    public function show()
    {
        // fungsi untuk menampilkan halaman detail
    }

    public function edit()
    {
        // fungsi untuk menampilkan form edit
    }

    public function update()
    {
        // fungsi untuk menjalankan proses edit
    }

    public function destroy()
    {
        // fungsi untuk menjalankan proses delete
    }
}
