<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gogs', function (Blueprint $table) {
            $table->id();
            $table->string('compN');
            $table->string('contP');
            $table->string('phone');
            $table->string('email');
            $table->string('area');
            $table->string('special');
            $table->string('product');
            $table->string('country');
            $table->string('city');
            $table->string('whatsap');
            $table->string('file');
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
        Schema::dropIfExists('gogs');
    }
}
