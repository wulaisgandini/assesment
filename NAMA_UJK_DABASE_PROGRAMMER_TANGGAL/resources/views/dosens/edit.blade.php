<!-- resources/views/dosens/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Dosen</h2>

        <form action="{{ route('dosens.update', $dosen->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" name="nip" value="{{ $dosen->nip }}" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="{{ $dosen->nama }}" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="matkul">Mata Kuliah:</label>
            <input type="text" name="matkul" value="{{ $dosen->matkul }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
