<!-- resources/views/dosens/index.blade.php -->
@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Dosen</h2>

        <a href="{{ route('dosens.create') }}" class="btn btn-success">Create New Dosen</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Mata Kuliah</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dosens as $dosen)
                    <tr>
                        <td>{{ $dosen->id }}</td>
                        <td>{{ $dosen->nip }}</td>
                        <td>{{ $dosen->nama }}</td>
                        <td>{{ $dosen->matkul }}</td>
                        <td>
                            <a href="{{ route('dosens.edit', $dosen->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('dosens.destroy', $dosen->id) }}" method="POST" style="display: inline-block;">
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
