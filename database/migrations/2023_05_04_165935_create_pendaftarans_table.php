<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('no_rm');
            $table->string('no_ktp');
            // $table->string('no_bpjs')->nullable();
            $table->string('nama');
            $table->string('ttl');
            $table->string('jenis_kelamin');
            $table->string('status');
            $table->string('pj');
            $table->string('no_pj');
            $table->string('alamat');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->string('no_hp');
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
        Schema::dropIfExists('pendaftarans');
    }
}
