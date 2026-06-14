@extends('template2')
@section('title', 'Data Modem')
@section('konten')

    <a href="/modem/tambah" class="btn btn-primary mb-3">
        Tambah Modem Baru
    </a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Merk Modem</th>
                <th>Stock Modem</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($modem as $m)
                <tr>
                    <td>{{ $m->merkmodem}}</td>

                    <td>{{ $m->stockmodem }}</td>

                    <td>
                        @if ($m->tersedia == 'Y')
                            <span class="badge bg-success">Tersedia</span>
                        @else
                            <span class="badge bg-danger">Tidak Tersedia</span>
                        @endif
                    </td>

                    <td>
                        <a href="/modem/edit/{{ $m->merkmodem }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="/modem/hapus/{{ $m->merkmodem }}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin hapus data ini?')">
                            Hapus
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $modem->links() }}
@endsection
