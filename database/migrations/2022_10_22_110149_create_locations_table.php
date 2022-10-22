<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{    public function up()
    {
<<<<<<<< HEAD:database/migrations/2022_10_22_104715_create_locations_table.php
        Schema::create('locations', function (Blueprint $table) {
========
        Schema::create('location', function (Blueprint $table) {
>>>>>>>> main:database/migrations/2022_10_22_110149_create_locations_table.php
            $table->id();
            $table->string('lieu');
            $table->string('cin');
            $table->date('dateDebut');
            $table->date('dateFin');
<<<<<<<< HEAD:database/migrations/2022_10_22_104715_create_locations_table.php

========
>>>>>>>> main:database/migrations/2022_10_22_110149_create_locations_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<<< HEAD:database/migrations/2022_10_22_104715_create_locations_table.php
        Schema::dropIfExists('locations');
========
        Schema::dropIfExists('location');
>>>>>>>> main:database/migrations/2022_10_22_110149_create_locations_table.php
    }
};
