@extends('layouts.app')

@section('title', 'Form Produk')

@section('contents')
  <form action="{{ isset($barang) ? route('produk.tambah.update', $barang->id) : route('produk.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($barang) ? 'Form Edit Produk' : 'Form Tambah Produk' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="kode_barang">Kode Produk</label>
              <input type="text" class="form-control" id="kode_barang" name="kode_produk" value="{{ isset($barang) ? $barang->kode_produk : '' }}">
            </div>
            <div class="form-group">
              <label for="nama_barang">Nama Produk</label>
              <input type="text" class="form-control" id="nama_barang" name="nama_produk" value="{{ isset($barang) ? $barang->nama_produk : '' }}">
            </div>
            <div class="form-group">
              <label for="id_kategori">Kategori Barang</label>
							<select name="id_kategori" id="id_kategori" class="custom-select">
								<option value="" selected disabled hidden>-- Pilih Kategori --</option>
								@foreach ($kategori as $row)
									<option value="{{ $row->id }}" {{ isset($barang) ? ($barang->id_kategori == $row->id ? 'selected' : '') : '' }}>{{ $row->nama }}</option>
								@endforeach
							</select>
            </div>
            <div class="form-group">
              <label for="harga">Harga Produk</label>
              <input type="number" class="form-control" id="harga" name="harga" value="{{ isset($barang) ? $barang->harga : '' }}">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
