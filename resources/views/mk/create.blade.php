@extends('layout.master')

@section('title', 'Tambah Mata Kuliah')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/mk') }}">Mata Kuliah</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Tambah Mata Kuliah</h4>
            </div>
        </div>
        <form action="{{ url('/mk') }}" method="POST">
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label">ID Mata Kuliah</label>
                    <input class="form-control" type="text" name="nim">
                </div>
                <div>
                    <label class="form-label">Nama Mata Kuliah</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                <div>
                    <label class="form-label">Jurusan</label>
                    <select class="form-select" name="jurusan">
                        <option value="1">Sistem Komputer</option>
                        <option value="2">Teknologi Informasi</option>
                        <option value="3">Design Komunikasi Visual</option>
                        <option value="4">Business Digital</option>
                </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
