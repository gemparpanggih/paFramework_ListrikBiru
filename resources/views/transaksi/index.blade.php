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

    <h2>Data Transaksi</h2>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <tr class="mode">
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jumlah Pembayaran</th>
                <th scope="col">Nomor Meteran</th>
                <th scope="col">Total Kwh</th>
                <th scope="col">Token</th>
                <th scope="col">Tarif</th>
                <th scope="col">Nama User</th>
                <th scope="col">Aksi</th>
            </tr>
            @foreach ($transaksis as $transaksi)
            
            <tr class="mode">
                <th scope="row">{{ $transaksi->id}}</th>
                <td>{{ $transaksi->tanggal}}</td>
                <td>Rp. {{ $transaksi->jumlahbeli}}</td>
                <td>{{ $transaksi->nometer}}</td>
                <td>
                    <?php
                        $total = round($transaksi->jumlahbeli/$transaksi->tarif->biaya, 2);
                        echo $total;
                    ?> kWh
                </td>
                <td>{{ $transaksi->token}}</td>
                <td>Rp. {{ $transaksi->tarif->biaya}}</td>
                <td>{{ $transaksi->user->name}}</td>
                <td>
                    <a href="{{ route('transaksi.read', $transaksi->id) }}" class="btn btn-success fa-solid fa-eye"></a>
                    <a class="btn btn-danger fa-sharp fa-solid fa-trash" href="/transaksi/hapus/{{ $transaksi->id }}"></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</main>
@endsection