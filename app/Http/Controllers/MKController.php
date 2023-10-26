<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MKController extends Controller
{
    private $mk = [
        [
            'id' => 'SK01',
            'nama' => 'Object Oriented Programming',
            'jurusan' => 'Sistem Komputer'
        ],
        [
            'id' => 'SK02',
            'nama' => 'Web Programming',
            'jurusan' => 'Sistem Komputer' 
        ],
        [
            'id' => 'SK03',
            'nama' => 'Sensor and Transduser',
            'jurusan' => 'Sistem Komputer'
        ],
        [
            'id' => 'SK04',
            'nama' => 'Microprocessor',
            'jurusan' => 'Sistem Komputer'
        ]
    ];

    public function index()
    {
        return view('mk.index', ['mk' => $this->mk] );
    }

    public function create()
    {
        return view('mk.create');
    }

    public function show($id)
    {
    }
}
