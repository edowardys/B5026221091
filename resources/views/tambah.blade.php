@extends('master')
@section('title', 'Tambah Data Pegawai')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class= "form-group row">
            <label for="nama" class="col-sm-1 col-form-label mr-2">Nama:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="nama" name="nama" placeholder = "Masukan Nama">
            </div>
        </div>

        <div class="form-group row">
            <label for="Jabatan" class="col-sm-1 col-form-label mr-2">Jabatan:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder = "Masukan Jabatan">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-1 col-form-label mr-2">Umur:</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" id="umur" name="umur" placeholder = "Masukan Umur">
            </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-1 col-form-label mr-2">Alamat:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder = "Masukan Alamat">
            </div>
        </div>

        <input type="submit" value="Simpan Data">
	</form>

@endsection
