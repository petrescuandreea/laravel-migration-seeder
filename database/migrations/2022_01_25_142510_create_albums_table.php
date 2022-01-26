<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {

            $table -> id();

            $table -> string('title', 60);
            $table -> date('date_of_release');
            $table -> string('produced_by', 60);
            $table -> bigInteger('views') -> unsigned() -> default(0);
            $table -> bigInteger('sales') -> unsigned() -> default(0);
            $table -> string('cover') -> nullable();

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
        Schema::dropIfExists('albums');
    }
}
