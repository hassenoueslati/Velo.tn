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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nomProduit');
            $table->string('descriptionProduit');
            $table->float('prixProduit');
<<<<<<<< HEAD:database/migrations/2022_10_22_104307_create_produits_table.php
            $table->integer('quantity');
/*            $table->foreignId('id_promotion')->unsigned()->nullable()->constrained('promotions')->cascadeOnDelete();*/
========
            $table->foreignId('id_promotion')->unsigned()->nullable()->constrained('promotions')->cascadeOnDelete();
>>>>>>>> main:database/migrations/2022_10_22_105838_create_produits_table.php
            // $table->int('quantiteProduit');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('image');
            $table->string('etatProduit');
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
        Schema::dropIfExists('produits');
    }
};
