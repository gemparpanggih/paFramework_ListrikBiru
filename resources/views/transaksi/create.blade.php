@extends('layouts.form')

@section('content')
<header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">Tambah Data</span>
        </a>

    </div>

</header>

<form action="/transaksi/store" method="post">
    {{ csrf_field() }}
    <!-- 2 column grid layout with text inputs for the first and last names -->

    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label">Tanggal</label>
        <input type="text" required="required" id="tanggal" name="tanggal" value="<?php echo date('y/m/d'); ?>" class="form-control" readonly />
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label">Jumlah Pembayaran</label>
        <input type="number" required="required" id="jumlahbeli" name="jumlahbeli" class="form-control" />
    </div>

    <div class="form-outline mb-4">
        <label class="form-label">Nometer</label>
        <input type="number" required="required" id="nometer" name="nometer" class="form-control" />
    </div>

    <input type="hidden" required="required" id="token" name="token" value="<?php echo rand() ?>" class="form-control" />

    <div class="form-outline mb-4">
        <label class="form-label">Tarif</label>
        <select name="tarif_id" id="tarif_id" class="form-control">
            @foreach ($tarifs as $tarif)
                <option value="{{ $tarif->id }}">{{ $tarif->voltase}} || Rp. {{ $tarif->biaya}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-outline mb-4">
        <label class="form-label">User</label>
        <select name="user_id" id="user_id" class="form-control">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name}}</option>
            @endforeach
        </select>
    </div>

    <input type="submit" value="Simpan Data" class="btn btn-primary btn-block mb-4">
</form>
@endsection