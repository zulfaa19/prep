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
        Schema::create('user_kategori', function (Blueprint $table) {
            
            $table->unsignedBigInteger('id_user');
            $table->string('nama_user');
            $table->unsignedBigInteger('id_kategori');
            $table->string('nama_kategori');
            
            
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            
            
            $table->foreign('id_kategori')->references('id')->on('kategori')->onDelete('cascade');
            $table->primary(['id_user', 'id_kategori']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_kategori');
    }
};

