<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cover1')->nullable();
            $table->string('cover2')->nullable();
            $table->string('cover3')->nullable();
            $table->string('cover4')->nullable();
            $table->string('nama_barang');
            $table->string('kondisi');
            $table->string('harga');
            $table->string('kota/kab');
            $table->string('alamat_lengkap');
            $table->string('line');
            $table->string('sms/tlp');
            $table->string('whatsapp');
            $table->string('bbm');
            $table->string('kategori_barang');
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
        Schema::dropIfExists('barangs');
    }
}
