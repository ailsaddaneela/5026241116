@extends('template2')

@section('title', 'Keranjang Belanja')

@section('konten')

    <a href="/keranjangbelanja/tambah" class="btn btn-primary mb-3">
        Beli
    </a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per Item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($keranjangbelanja as $k)
                <tr>
                    <td>{{ $k->ID }}</td>

                    <td>{{ $k->KodeBarang }}</td>

                    <td>{{ $k->Jumlah }}</td>

                    <td>
                        Rp {{ number_format($k->Harga, 0, ',', '.') }}
                    </td>

                    <td>
                        Rp {{ number_format($k->Total, 0, ',', '.') }}
                    </td>

                    <td>
                        <a href="/keranjangbelanja/tambah" class="btn btn-warning btn-sm">
                            Beli
                        </a>
                        <a href="/keranjangbelanja/batal/{{ $k->ID }}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin dibatalkan?')">
                            Batal

                        </a>

                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
