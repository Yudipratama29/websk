@extends('layout.master')

@section('title', 'Ubah MK')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/mk') }}">MK</a></li>
    <li class="breadcrumb-item active">Ubah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Ubah Mata Kuliah</h4>
            </div>
        </div>
        <form action="{{ url('/mk/' . $id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div>
                    <label class="form-label">id</label>
                    <input class="form-control" type="text" name="id" value="{{ $mk['id'] }}">
                </div>
                <div>
                    <label class="form-label">Nama Mata Kuliah</label>
                    <input class="form-control" type="text" name="nama" value="{{ $mk['nama'] }}">
                </div>
                <div>
                    <label class="form-label">Jurusan</label>
                    <select class="form-select" name="jurusan">
                        <option {{ $mk['jurusan'] == 'TI' ? 'selected' : '' }} value="TI">TI</option>
                        <option {{ $mk['jurusan'] == 'SK' ? 'selected' : '' }} value="SK">SK</option>
                        <option {{ $mk['jurusan'] == 'DGM' ? 'selected' : '' }} value="DGM">DGM</option>
                    </select>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
