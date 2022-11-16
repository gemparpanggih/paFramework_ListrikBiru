@extends('layouts.global')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="table-responsive">
        <div class="container py-5">
            <h3><strong>LIHAT DATA</strong></h3>
            <hr>
            <br>
            <table class="table table-borderless">
                <tr>
                    <td>
                        <h4>Kode Tarif</h4>
                    </td>
                    <td>
                        <h4>:</h4>
                    </td>
                    <td>
                        <h4>{{$tarif->kodetarif}}</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Voltase</h4>
                    </td>
                    <td>
                        <h4>:</h4>
                    </td>
                    <td>
                        <h4>{{$tarif->voltase}}</h4>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</main>
@endsection