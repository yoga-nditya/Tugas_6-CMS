<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
	public function index()
	{
		$barang = Produk::get();

		return view('produk.index', ['data' => $barang]);
	}

	public function tambah()
	{
		$kategori = Kategori::get();

		return view('produk.form', ['kategori' => $kategori]);
	}

	public function simpan(Request $request)
	{
		$data = [
			'kode_produk' => $request->kode_produk,
			'nama_produk' => $request->nama_produk,
			'id_kategori' => $request->id_kategori,
			'harga' => $request->harga,
		];

		Produk::create($data);

		return redirect()->route('produk');
	}

	public function edit($id)
	{
		$barang = Produk::find($id)->first();
		$kategori = Kategori::get();

		return view('produk.form', ['produk' => $barang, 'kategori' => $kategori]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'kode_produk' => $request->kode_produk,
			'nama_produk' => $request->nama_produk,
			'id_kategori' => $request->id_kategori,
			'harga' => $request->harga,
		];

		Produk::find($id)->update($data);

		return redirect()->route('produk');
	}

	public function hapus($id)
	{
		Produk::find($id)->delete();

		return redirect()->route('produk');
	}
}