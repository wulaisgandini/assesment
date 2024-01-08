<!-- resources/views/prodis/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Prodi</h2>
        <form action="{{ route('prodis.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kode_matkul">Kode Matkul:</label>
                <input type="text" class="form-control" name="kode_matkul" required>
            </div>
            <div class="form-group">
                <label for="nama_matkul">Nama Matkul:</label>
                <input type="text" class="form-control" name="nama_matkul" required>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
