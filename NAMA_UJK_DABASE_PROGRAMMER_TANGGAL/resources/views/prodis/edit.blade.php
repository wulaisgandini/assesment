<!-- resources/views/prodis/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Prodi</h2>
        <form action="{{ route('prodis.update', $prodi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_matkul">Kode Matkul:</label>
                <input type="text" class="form-control" name="kode_matkul" value="{{ $prodi->kode_matkul }}" required>
            </div>
            <div class="form-group">
                <label for="nama_matkul">Nama Matkul:</label>
                <input type="text" class="form-control" name="nama_matkul" value="{{ $prodi->nama_matkul }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
