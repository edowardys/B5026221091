@extends('masternilai')
@section('title', 'Tambah Data')

@section('konten')
	<h3>Tambah Data</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/storenilai" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="Jabatan" class="col-sm-1 col-form-label mr-2">NRP:</label>
            <div class="col-sm-5">
                <input type="char" class="form-control" id="NRP" name="NRP" placeholder = "Masukan NRP">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-1 col-form-label mr-2">Nilai Angka:</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" id="nilaiangka" name="nilaiangka" placeholder = "Masukan Nilai">
            </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-1 col-form-label mr-2">SKS:</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" id="SKS" name="SKS" placeholder = "Masukan jumlah SKS ">
            </div>
        </div>

        <input type="submit" value="Simpan Data">
	</form>

@endsection
