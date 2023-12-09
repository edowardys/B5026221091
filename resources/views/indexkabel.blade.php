@extends('master')

@section('title','Kabel')

@section('konten')
	<h3>Data Kabel</h3>

	<a href="/kabel/tambahkabel" class="btn btn-primary"> + Tambah</a>

	<br/>
    <br/>

    {{-- <p>Cari Data Pegawai berdasarkan Nama:</p> --}}
	{{-- <form action="/pegawai/cari" method="GET">
		<input class="form-control"  type="text" name="cari" placeholder="Cari Pegawai .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
        <br/>
		<input class="btn btn-primary"  type="submit" value="CARI">
	</form> --}}
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Kabel</th>
			<th>Merk Kabel</th>
			<th>Stock Kabel</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($kabel as $k)
		<tr>
			<td>{{ $k->KodeKabel }}</td>
			<td>{{ $k->MerkKabel }}</td>
			<td>{{ $k->StockKabel }}</td>
			<td class="text-center">
                <input style=  "width: 25px; height: 28px;" type="checkbox" name="tersedia" {{ $k->Tersedia == 'y' ? 'checked' : '' }} disabled>
            </td>
            <td>
                <a href="/kabel/viewkabel/{{ $k->KodeKabel }}" class="btn btn-success">View</a>
				|
				<a href="/kabel/editkabel/{{ $k->KodeKabel }}" class="btn btn-warning">Edit</a>
				|
				<a href="/kabel/hapuskabel/{{ $k->KodeKabel }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{-- {{ $pe->links() }} --}}
@endsection
