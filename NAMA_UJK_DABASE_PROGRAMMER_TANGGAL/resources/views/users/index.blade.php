@extends('layouts.master')
    @section('content')
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <a href="{{ route('user.create') }}" class="btn btn-outline-secondary ">Tambah
                                        User</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="pesanan">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            @php $no=1; @endphp
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->password }}</td>
                                                        <td>
                                                            <form action="{{ route('user.destroy', $user->id) }}"
                                                                method="post">
                                                                @method('delete')
                                                                @csrf
                                                                <a href="{{ route('user.edit', $user->id) }}"
                                                                    class="btn btn-outline-info">Edit</a>
                                                                {{-- <a href="{{ route('user.show', $user->id) }}"
                                                                    class="btn btn-outline-warning">Show</a>  --}}
                                                                <button type="submit"
                                                                    class="btn btn-outline-danger delete-confirm">Hapus</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            <tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


