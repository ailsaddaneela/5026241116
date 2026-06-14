@extends('template2')
@section('title', 'Edit Data Modem')
@section('konten')

    <a href="/modem" class="btn btn-secondary mb-4">Kembali</a>

    @foreach ($modem as $m)
        <div class="card">
            <div class="card-header">
                Form Edit Data Modem
            </div>
            <div class="card-body">
                <form action="/modem/update" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="id" value="{{ $m->kodemodem }}">

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Merk Modem</label>
                        <div class="col-sm-10">
                            <input type="text" name="merkmodem" class="form-control" required
                                value="{{ $m->merkmodem }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Stock Modem</label>
                        <div class="col-sm-10">
                            <input type="number" name="stockmodem" class="form-control" required
                                value="{{ $m->stockmodem }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tersedia</label>
                        <div class="col-sm-10">
                            <select name="tersedia" class="form-select">
                                <option value="Y" {{ $m->tersedia == 'Y' ? 'selected' : '' }}>Tersedia </option>
                                <option value="N" {{ $m->tersedia == 'N' ? 'selected' : '' }}>Tidak Tersedia</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Simpan Data" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach

@endsection
