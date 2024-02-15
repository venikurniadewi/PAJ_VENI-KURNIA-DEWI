<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // Metode yang akan dijalankan saat migrasi diterapkan
    public function up()
    {
        Schema::create('voters', function (Blueprint $table) {
            $table->id(); //Mendefinisikan kolom 'id' sebagai primary key yang otomatis bertambah
            $table->string('name'); //Mendefinisikan kolom 'name' dengan tipe data string
            $table->string('email'); //Mendefinisikan kolom 'email' dengan tipe data string
            $table->text('address'); //Mendefinisikan kolom 'address' dengan tipe data text
            $table->timeStamps(); //Mendefinisikan dua kolom 'created_at' dan 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voters');
    }
}
