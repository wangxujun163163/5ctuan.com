<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesslogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('accesslogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('os_version')->default('');
            $table->string('rom')->default('');
            $table->string('arch')->default('');
            $table->string('model')->default('');
            $table->string('screen')->default('');
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
        //
    }
}
