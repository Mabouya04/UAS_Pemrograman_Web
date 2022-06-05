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
        Schema::create('senjatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipe_senjata_id');
            $table->string('nama_senjata')->unique();
            $table->string('link_gambar');
            $table->text('deskripsi_senjata');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('senjatas');
    }
};