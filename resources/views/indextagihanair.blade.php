@extends('template2')

@section('title', 'Kode Soal tagihan_air')

@section('konten')

    <a href="/eas/tambah" class="btn btn-primary mb-3">
        Input Tagihan Baru
    </a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nomor Meteran</th>
                <th>Penggunaan (m³)</th>
                <th>Total Tagihan</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($tagihanair as $t)
                <tr>
                    <td>{{ $t->ID }}</td>
                    <td>{{ $t->NoMeteran}}</td>
                    <td>
                        Rp {{ number_format($t->penggunaan, 0, ',', '.') }}
                    </td>

                    <td>
                        Rp {{ number_format($t->total, 0, ',', '.') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
