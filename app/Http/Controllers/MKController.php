<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MKController extends Controller
{
    private $mk = [
        [
            'ID' => 'SK01',
            'Nama' => 'Object Oriented Programming',
            'Jurusan' => 'Sistem Komputer'
        ],
        [
            'ID' => 'SK02',
            'Nama' => 'Web Programming',
            'Jurusan' => 'Sistem Komputer' 
        ],
        [
            'ID' => 'SK03',
            'Nama' => 'Sensor and Transduser',
            'Jurusan' => 'Sistem Komputer'
        ],
    ];

    public function index()
    {
        return view('mk.index', ['data' => $this->mk] );
    }

    public function create()
    {
        return view('mk.create');
    }

    public function show($id)
    {
    }
}
