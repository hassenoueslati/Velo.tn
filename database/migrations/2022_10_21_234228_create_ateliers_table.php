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

        Schema::create('ateliers', function (Blueprint $table) {
            $table->id();
            $table->string('specialite');
            $table->integer('capacite');
            $table->string('addresseAtelier');
            // $table->foreignId('user_id')
            //     ->constrained('users')
            //     ->cascadeOnDelete();
            $table->foreignId('partenaires_id')->unsigned()->constrained('partenaires')->cascadeOnDelete();
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
        Schema::dropIfExists('ateliers');
    }
};
