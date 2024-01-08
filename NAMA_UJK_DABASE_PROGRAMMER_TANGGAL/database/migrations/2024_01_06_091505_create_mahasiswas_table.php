<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim'); // Add nim column
            $table->string('nama'); // Add nama column
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']); // Add jenis_kelamin column
            $table->string('prodi'); // Add prodi column
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
