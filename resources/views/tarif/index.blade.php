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

    <h2>Data Tarif</h2>
    <br>
    <a class="btn btn-success btn-block mb-4" href="/tarif/create">+ Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <tr class="mode">
                <th scope="col">#</th>
                <th scope="col">Kodetarif</th>
                <th scope="col">Voltase</th>
                <th scope="col">Biaya</th>
                <th scope="col">Aksi</th>
            </tr>
            @foreach ($tarifs as $tarif)
            <tr class="mode">
                <th scope="row">{{ $tarif->id}}</th>
                <td>{{ $tarif->kodetarif}}</td>
                <td>{{ $tarif->voltase}}</td>
                <td>{{ $tarif->biaya}}</td>


                <td>

                    <a href="{{ route('tarif.read', $tarif->id) }}" class="btn btn-success">Lihat</a>
                    <a class="btn btn-primary" href="{{ route('tarif.update', $tarif->id) }}">Edit</a>
                    <a class="btn btn-danger" href="/tarif/hapus/{{ $tarif->id }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</main>
@endsection