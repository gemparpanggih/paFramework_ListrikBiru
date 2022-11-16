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
                        <h4>Nama User</h4>
                    </td>
                    <td>
                        <h4>:</h4>
                    </td>
                    <td>
                        <h4>{{$transaksi->user->name}}</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Tanggal</h4>
                    </td>
                    <td>
                        <h4>:</h4>
                    </td>
                    <td>
                        <h4>{{$transaksi->tanggal}}</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Jumlah Pembayaran</h4>
                    </td>
                    <td>
                        <h4>:</h4>
                    </td>
                    <td>
                        <h4>Rp. {{$transaksi->jumlahbeli}}</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Total Kwh</h4>
                    </td>
                    <td>
                        <h4>:</h4>
                    </td>
                    <td>
                        <h4>
                        <?php
                            $total = round($transaksi->jumlahbeli/$transaksi->tarif->biaya, 2);
                            echo $total;
                        ?>
                         kWh</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Token</h4>
                    </td>
                    <td>
                        <h4>:</h4>
                    </td>
                    <td>
                        <h4>{{$transaksi->token}}</h4>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</main>
@endsection