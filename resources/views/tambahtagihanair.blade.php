@extends('template2')

@section('title', 'Tambah Tagihan Air')

@section('konten')

<a href="/eas" class="btn btn-secondary mb-4">
    Kembali
</a>

<div class="card">
    <div class="card-header">
        Form Input Tagihan Baru
    </div>
    <div class="card-body">
        <form action="/eas/store" method="post" onsubmit="return validasiTagihan()">
            {{ csrf_field() }}

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nomor Meteran</label>
                <div class="col-sm-10">
                    <input type="text" id="NoMeteran" name="NoMeteran"
                        class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Meter Awal</label>
                <div class="col-sm-10">
                    <input type="text" id="MeterAwal" name="MeterAwal"
                        class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Meter Akhir</label>
                <div class="col-sm-10">
                    <input type="text" id="MeterAkhir" name="MeterAkhir"
                        class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="offset-sm-2 col-sm-10">
                    <input type="submit" value="Simpan Data"
                        class="btn btn-primary">
                </div>
            </div>

        </form>
    </div>
</div>

@endsection
