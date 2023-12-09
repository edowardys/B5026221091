@extends('master')

@section('title','Tambah Kabel')

@section('konten')
<style>
    input.check {
        width: 25px;
        height: 40px;
    }
</style>

	<h3>Data Pembelian Baru</h3>

    <a href="/kabel"> Kembali</a>

	<br/>
	<br/>

	<form action="/kabel/storekabel" method="post" class="form-horizontal">
		{{ csrf_field() }}
        {{-- <div class="form-group">
            <label for="id">Kode Pembelian:</label>
            <input type="text" class="form-control" placeholder="Masukkan Kode Pembelian" id="id" name="id">
        </div> --}}

			<div class = "form-group row">
				<label for = "merkkabel" class ="col-sm-2 col-form-label mr-2">Merk Kabel:</label>
				<div class = "col-sm-5">
					<input type="text" class="form-control" style="width: 400px" placeholder="Masukkan Merk Kabel" id="merkkabel" name="merkkabel">
				</div>
			</div>
			<div class = "form-group row">
				<label for = "stockkabel" class ="col-sm-2 col-form-label mr-2">Stock Kabel:</label>
				<div class = "col-sm-5">
					<input type="number" class="form-control" style="width: 400px" placeholder="Masukkan Jumlah Stock Kabel" id="stockkabel" name="stockkabel">
				</div>
			</div>
			<div class = "form-group row">
				<label for = "tersedia" class ="col-sm-2 col-form-label mr-2">Ketersediaan:</label>
				<div class = "col-sm-5">
					<input class="check" type="checkbox" name="tersedia">
				</div>
			</div>
        <button type="submit" value="Simpan Data" class= 'btn btn-primary'>Simpan Data</button>


		{{-- Nama <input type="text" name="nama"> <br/>
		Jabatan <input type="text" name="jabatan"> <br/>
		Umur <input type="number" name="umur"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}
	</form>

@endsection
