@extends('layout.master')

@section('title', 'Ubah Mahasiswa')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
    <li class="breadcrumb-item active">Ubah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Ubah Mahasiswa</h4>
            </div>
        </div>
        <p>NIM     : {{$data->nim}}</p>
        <p>Nama    : {{$data->nama}}</p>
        <p>Jurusan : {{$data->jurusan_nama}}</p>
    </div>
@endsection
