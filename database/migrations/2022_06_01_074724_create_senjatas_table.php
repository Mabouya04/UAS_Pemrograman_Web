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
            $table->string('Nama_Senjata');
            $table->string('Link_Gambar');
            $table->string('Tipe_Senjata');
            $table->text('Deskripsi_Senjata');
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
