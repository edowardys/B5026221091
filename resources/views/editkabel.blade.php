@extends('master')

@section('title', 'Edit Data Kabel')

@section('judul')
    <h3>Edit Data Kabel</h3>

    <a href="/kabel"> Kembali</a>

	<br/>
	<br/>
@endsection
@section('konten')
<style>
    input.check {
        width: 25px;
        height: 40px;
    }
</style>
	@foreach($kabel as $k)
	<form action="/kabel/updatekabel" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodekabel" value="{{ $k->KodeKabel }}">
			<div class = "form-group row">
				<label for = "merkkabel" class ="col-sm-2 col-form-label mr-2">Merk Kabel:</label>
				<div class = "col-sm-5">
					<input type="text" required="required" placeholder="Masukkan Merk Kabel" name="merkkabel" id="merkkabel" value="{{ $k->MerkKabel }}" class="form-control">
				</div>
			</div>
			<div class = "form-group row">
				<label for = "stockkabel" class ="col-sm-2 col-form-label mr-2">Stock Kabel:</label>
				<div class = "col-sm-5">
					<input type="number" required="required" placeholder="Masukkan Jumlah Stock Kabel" name="stockkabel" id="stockkabel" value="{{ $k->StockKabel }}" class="form-control">
				</div>
			</div>
			<div class = "form-group row">
				<label for = "tersedia" class ="col-sm-2 col-form-label mr-2">Ketersediaan:</label>
				<div class = "col-sm-5">
					<input class="check"  type="checkbox" name="tersedia" value='y' {{ $k->Tersedia == 'y' ? 'checked':''}}>
				</div>
			</div>
		<input type="submit" value="Simpan Data" class= 'btn btn-primary'>
	</form>
	@endforeach
@endsection
