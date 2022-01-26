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

            $table -> string('name', 60);
            $table -> string('surname', 60);
            $table -> string('stagename') -> nullable();
            $table -> date('date_of_birth');
            $table -> string('genre', 20);
            $table -> string('website') -> nullable();
            $table -> string('record_label', 60);
            $table -> text('bio') -> nullable();

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
