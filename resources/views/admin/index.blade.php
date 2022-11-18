@extends('layouts.index')

@section('content')
<header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <img style="widht: 5px; height: 50px;" src="{{ asset('img/logo-listrik.png') }}" alt="">
            <span class="ms-4 fs-4">{{ Auth::user()->name ?? "Listrik Biru"}}</span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 btn btn-primary" href="{{ Auth::user() ? '/logout': '/login'}}">{{
                Auth::user() ? 'Logout' : 'Login'}}</a>
        </nav>
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        <b>Yeah!</b> {{ session('success') }}
    </div>
    @endif
</header>

<div class="container p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Halaman Admin</h1>
        <p class="col-md-8 fs-4">Listrik Biru untuk dunia yang lebih biru. <br>Perusahaan ini bergerak
            dibidang transaksi Token Listrik secara Prabayar melalui website atau aplikasi online.</p>
        <a href="{{ Auth::user() ? '/tabel': '/admin'}}" class="btn btn-primary btn-lg">Dasboard</a>
    </div>
</div>

<div class="row align-items-md-stretch">
    <div class="col-md-6">
        <div class="h-100 p-5 text-bg-primary rounded-3">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, perferendis esse ex nulla
                repellendus numquam mollitia hic. Quaerat, ex adipisci!.</p>
            <button class="btn btn-outline-light" type="button">Example button</button>
        </div>
    </div>
    <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
            <h2>Lorem Ipsum Dolor</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae fuga assumenda architecto,
                eaque quasi nesciunt inventore temporibus quibusdam consequatur numquam incidunt delectus
                autem repellat harum tempora soluta ab voluptates amet..</p>
            <button class="btn btn-outline-secondary" type="button">Example button</button>
        </div>
    </div>
</div>
@endsection