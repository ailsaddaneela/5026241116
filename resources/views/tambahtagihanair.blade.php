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
                        <input type="text" id="NoMeteran" name="NoMeteran" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Meter Awal</label>
                    <div class="col-sm-10">
                        <input type="text" id="MeterAwal" name="MeterAwal" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Meter Akhir</label>
                    <div class="col-sm-10">
                        <input type="text" id="MeterAkhir" name="MeterAkhir" class="form-control" required>
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
    <script>
        function validasiTagihan() {
            var awal = document.getElementById("MeterAwal").value;
            var akhir = document.getElementById("MeterAkhir").value;

            if (awal == "" || akhir == "") {
                alert("Data harus diisi");
                return false;
            }

            if (isNaN(awal) || isNaN(akhir)) {
                alert("Input harus angka");
                return false;
            }

            if (parseInt(akhir) <= parseInt(awal) + 20) {
                alert("Meter Akhir harus lebih besar dari Meter Awal + 20");
                return false;
            }

            return true;
        }
    </script>

@endsection
