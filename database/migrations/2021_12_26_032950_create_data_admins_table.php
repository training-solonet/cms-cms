<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_admins', function (Blueprint $table) {
            $table->id();
            $table->string('training');
            $table->string('gambar');
            $table->text('deskripsi');
            $table->string('mentor');
            $table->string('waktu');
            $table->string('harga');

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
        Schema::dropIfExists('data_admins');
    }
}
