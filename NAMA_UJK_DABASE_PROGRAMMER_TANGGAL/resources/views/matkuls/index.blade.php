<!-- resources/views/matkuls/index.blade.php -->

@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Mata Kuliah</h2>
        <a href="{{ route('matkuls.create') }}" class="btn btn-primary">Add Matkul</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Matkul</th>
                    <th>Nama Matkul</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($matkuls as $matkul)
                    <tr>
                        <td>{{ $matkul->id }}</td>
                        <td>{{ $matkul->kode_matkul }}</td>
                        <td>{{ $matkul->nama_matkul }}</td>
                        <td>
                            <a href="{{ route('matkuls.edit', $matkul->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('matkuls.destroy', $matkul->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
