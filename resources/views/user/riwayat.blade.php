<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Listrik Biru</title>
</head>

<body>
    <div class="container py-4">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="/user" class="d-flex align-items-center text-dark text-decoration-none">
                    <img style="widht: 5px; height: 50px;" src="{{ asset('img/logo-listrik.png') }}" alt="">
                    <span class="ms-4 fs-4">{{ Auth::user()->name ?? "Listrik Biru"}}</span>
                </a>

                <nav class="d-inline-flex ms-md-auto">
                    <a class="me-3 py-2 text-dark text-decoration-none"
                        href="{{ route('transaksi.riwayat',  Auth::user()->id) }}">Riwayat</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="/daftarTarif">Pricing</a>
                    <a class="me-3 py-2 btn btn-primary"
                        href="{{ Auth::user() ? '/logout': '/login'}}">{{ Auth::user() ? 'Logout' : 'Login'}}</a>
                </nav>
            </div>

        </header>

        @if (session('success'))
        <div class="alert alert-success">
            <b>Yeah!</b> {{ session('success') }}
        </div>
        @endif

        <h2>Riwayat Transaksi</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <tr class="mode">
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jumlah Pembayaran</th>
                    <th scope="col">Nomor Meteran</th>
                    <th scope="col">Totalkwh</th>
                    <th scope="col">Token</th>
                    <th scope="col">User</th>
                    <th scope="col">Harga</th>
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
                        ?>
                    </td>
                    <td>{{ $transaksi->token}}</td>
                    <td>{{ $transaksi->user->name}}</td>
                    <td>Rp. {{ $transaksi->tarif->biaya}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>