<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegPasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('noregistrasi');
            $table->string('no_bpjs')->nullable();
            $table->foreignId('pasien_id');
            $table->foreignId('dokter_id');
            $table->foreignId('layanan_id');
            $table->string('tipe_pasien');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('reg_pasiens');
    }
}
