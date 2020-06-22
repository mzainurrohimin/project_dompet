<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('harga_normal');
            $table->string('harga_diskon');
            $table->string('diskon');
            $table->string('potongan_ongkir');
            $table->longText('pesan_sekarang');
            $table->longText('pesan_tf');
            $table->longText('pesan_cod');
            $table->softDeletes();
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
        Schema::dropIfExists('harga');
    }
}
