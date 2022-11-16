@extends('layouts.global')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    @if (session('success'))
    <div class="alert alert-success">
        <b>Yeah!</b> {{ session('success') }}
    </div>
    @endif

    <h2>Data User</h2>
    <br>
    <a class="btn btn-success btn-block mb-4" href="/register">+ Register User</a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <tr class="mode">
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Role</th>
                <th scope="col">Aksi</th>
            </tr>
            @foreach ($users as $user)
            <tr class="mode">
                <th scope="row">{{ $user->id}}</th>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->password}}</td>
                <td>{{ $user->role}}</td>
                <td>
                    <a class="btn btn-danger" href="{{ route('user.hapus', $user->id) }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</main>
@endsection