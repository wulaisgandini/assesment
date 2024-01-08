<!-- resources/views/dosens/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create New Dosen</h2>

        <form action="{{ route('dosens.store') }}" method="POST">
            @csrf
            <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" name="nip" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="matkul">Mata Kuliah:</label>
            <input type="text" name="matkul" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
