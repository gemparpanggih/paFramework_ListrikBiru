@extends('layouts.form')

@section('content')
<header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">Update Data</span>
        </a>
    </div>

</header>
@foreach($transaksis as $p)
<form action="/transaksi/update" method="post">
    {{ csrf_field() }}
    <!-- 2 column grid layout with text inputs for the first and last names -->

    <input type="hidden" name="id" value="{{ $p->id }}" class="form-control" />

    <div class="form-outline mb-4">
        <label class="form-label">Tanggal Pembelian</label>
        <input type="text" required="required" name="tanggal" value="{{ $p->tanggal }}" class="form-control" readonly />
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label">Jumlah Pembayaran</label>
        <input type="text" required="required" name="jumlahbeli" value="{{ $p->jumlahbeli }}" class="form-control" />
    </div>

    <div class="form-outline mb-4">
        <label class="form-label">Nomor Meteran</label>
        <input type="number" required="required" name="nometer" value="{{ $p->nometer }}" class="form-control" />
    </div>

    <div class="form-outline mb-4">
        <label class="form-label">Token</label>
        <input type="number" required="required" name="token" value="{{ $p->token }}" class="form-control" readonly/>
    </div>

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
@endforeach
@endsection