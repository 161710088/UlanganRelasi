<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FieldSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('siswa', function($table) {
            $table->unsignedInteger('guru_id')->after('nis')->nullable();
            $table->foreign('guru_id')->references('id')->on('guru')->onDelete('CASCADE');

            $table->unsignedInteger('kelas_id')->after('guru_id')->nullable();
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('CASCADE');

        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
