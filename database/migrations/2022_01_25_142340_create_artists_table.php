<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {

            $table -> id();

            $table -> string('name');
            $table -> string('surname');
            $table -> date('date_of_birth');
            $table -> string('place_of_birth') -> nullable();
            $table -> string('genre');
            $table -> integer('n_albums') -> nullable();
            $table -> string('website');
            $table -> text('more_information') -> nullable();

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artists');
    }
}
