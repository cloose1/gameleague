<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('time')->nullable();
            $table->integer('categoria');
            $table->string('contato');
            $table->string('namec');
            $table->string('emailc');
            $table->string('nickc');
            $table->string('name2')->nullable();
            $table->string('email2')->nullable();
            $table->string('nick2')->nullable();
            $table->string('name3')->nullable();
            $table->string('email3')->nullable();
            $table->string('nick3')->nullable();
            $table->string('name4')->nullable();
            $table->string('email4')->nullable();
            $table->string('nick4')->nullable();
            $table->string('status')->default(0);
            $table->string('name5')->nullable();
            $table->string('email5')->nullable();
            $table->string('nick5')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}
