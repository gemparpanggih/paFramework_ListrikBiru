@extends('layouts.form')

@section('content')
<header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">Tambah Data</span>
        </a>

    </div>

</header>

<form action="/tarif/store" method="post">
    {{ csrf_field() }}
    <!-- 2 column grid layout with text inputs for the first and last names -->

    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label">Kode Tarif</label>
        <input type="text" required="required" name="kodetarif" class="form-control" />
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label">Voltase</label>
        <input type="text" required="required" name="voltase" class="form-control" />
    </div>

    <div class="form-outline mb-4">
        <label class="form-label">Biaya</label>
        <input type="number" required="required" name="biaya" class="form-control" />
    </div>
    <input type="submit" value="Simpan Data" class="btn btn-primary btn-block mb-4">
</form>
@endsection