@extends('layouts.index')

@section('content')
<header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <img style="widht: 5px; height: 50px;" src="{{ asset('img/logo-listrik.png') }}" alt="">
            <span class="ms-4 fs-4">Listrik Biru</span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        </nav>
    </div>

</header>

<div class="container p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Listrik Biru</h1>
        <p class="col-md-8 fs-4">Listrik Biru untuk dunia yang lebih biru. <br>Perusahaan ini bergerak
            dibidang transaksi Token Listrik secara Prabayar melalui website atau aplikasi online.</p>
        <a href="{{ Auth::user() ? '/logout': '/login'}}" class="btn btn-primary btn-lg">{{ Auth::user() ?
            'Logout' : 'Login'}}</a>
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

<div class="pricing-header p-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal">Harga</h1>
    <p class="fs-5 text-muted">Dengan cepat menemukan tarif listrik anda disini! <br>Nothing Last Forever, We Can Change the Future!</p>
</div>

<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    @foreach ($tarifs as $tarif)
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3 text-bg-primary">
                <h4 class="my-0 fw-normal">Tarif/kWh</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">{{ $tarif->voltase}}<small class="text-muted fw-light">VA</small>
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>{{ $tarif->kodetarif}}</li>
                    <li>Rp. {{ $tarif->biaya}}</li>

                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Buy This!</button>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection