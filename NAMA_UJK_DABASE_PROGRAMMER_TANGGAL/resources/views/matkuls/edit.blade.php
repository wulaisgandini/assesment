<!-- resources/views/matkuls/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Matkul</h2>
        <form action="{{ route('matkuls.update', $matkul->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_matkul">Kode Matkul</label>
                <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" value="{{ $matkul->kode_matkul }}" required>
            </div>
            <div class="form-group">
                <label for="nama_matkul">Nama Matkul</label>
                <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" value="{{ $matkul->nama_matkul }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
