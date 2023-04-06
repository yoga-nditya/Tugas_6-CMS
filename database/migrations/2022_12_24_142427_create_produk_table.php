<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produk', function (Blueprint $table) {
			$table->id();
			$table->string('kode_produk')->nullable();
			$table->string('nama_produk')->nullable();
			$table->string('kategori_produk')->nullable();
			$table->string('harga')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('produk');
	}
};
