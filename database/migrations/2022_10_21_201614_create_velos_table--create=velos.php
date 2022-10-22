<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVelosTable extends Migration
{
    public function up()
    {
        Schema::create('velos', function (blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('nombres');
            $table->string('couleurs');
            $table->string('prix');
        
        });
    }

    public function down()
    {
        Schema::dropIfExists('velos');
    }
}
