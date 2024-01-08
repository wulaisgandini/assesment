<!-- resources/views/prodis/index.blade.php -->
@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Prodi</h2>
        <a href="{{ route('prodis.create') }}" class="btn btn-success mb-2">Create Prodi</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Matkul</th>
                    <th>Nama Matkul</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prodis as $prodi)
                    <tr>
                        <td>{{ $prodi->id }}</td>
                        <td>{{ $prodi->kode_matkul }}</td>
                        <td>{{ $prodi->nama_matkul }}</td>
                        <td>
                            <a href="{{ route('prodis.edit', $prodi->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('prodis.destroy', $prodi->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
