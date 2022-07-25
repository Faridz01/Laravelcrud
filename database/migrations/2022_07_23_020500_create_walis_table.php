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
        Schema::create('walis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('foto');
            $table->unsignedBigInteger('id_siswa');
            // membuat fk id_siswa yang mengacu kpd field id di table
            // siswas
            $table->foreign('id_siswa')->references('id')->on('siswas')
                ->onDelete('cascade');
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
        Schema::dropIfExists('walis');
    }
};
// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// class CreateWalisTable extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//         Schema::create('walis', function (Blueprint $table) {
//             $table->id();
//             $table->string('nama');
//             $table->string('foto');
//             //membuat fk id_siswa yang mengacu pada field id di tablel siswas
//             $table->unsignedBiginteger('id_siswa');
//             $table->foreign('id_siswa') -> references('id') -> on('siswas')
//                                 -> onDalate('CASCADE');
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
//     {
//         Schema::dropIfExists('walis');
//     }
// }
