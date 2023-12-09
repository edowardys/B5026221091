@extends('master')

@section('title', 'Edit Data Pegawai')

@section('judul')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

	<br/>
	<br/>
@endsection
@section('konten')
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
			<div class = "form-group row">
				<label for = "nama" class ="col-sm-1 col-form-label mr-2">Nama:</label>
				<div class = "col-sm-5">
					<input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control">
				</div>
			</div>
			<div class = "form-group row">
				<label for = "jabatan" class ="col-sm-1 col-form-label mr-2">Jabatan:</label>
				<div class = "col-sm-5">
					<input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control">
				</div>
			</div>
			<div class = "form-group row">
				<label for = "umur" class ="col-sm-1 col-form-label mr-2">Umur:</label>
				<div class = "col-sm-5">
					<input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control">
				</div>
			</div>
			<div class = "form-group row">
				<label for = "alamat" class ="col-sm-1 col-form-label mr-2">Alamat:</label>
				<div class = "col-sm-5">
					<textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea>
				</div>
			</div>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection

