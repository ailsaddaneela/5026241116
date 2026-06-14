@extends('template2')
@section('title', 'Data Pegawai')
@section('konten')

    <center>
        <br />
        <br />
        <p>Cari Data Pegawai :</p>
        <form action="/pegawaicari" method="GET">
            <input type="text" name="cari" placeholder="Cari Pegawai .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-primary" style="margin-top:10px;">
        </form>

        <br />
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            @foreach ($pegawai as $p)
                <tr>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td>
                        <a href="/pegawaiedit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
                        |
                        <a href="/pegawaihapus/{{ $p->pegawai_id }} " class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <div style="margin-top:15px;">
            {{ $pegawai->links() }}
        </div>

        <div class="text-center">
            <a href="/pegawaitambah" class="btn btn-primary mt-1 mb-5">
                + Tambah Pegawai Baru
            </a>
        </div>
    </center>
@endsection
