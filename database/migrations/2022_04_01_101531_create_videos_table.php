<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string("titolo", 150)->required();
            $table->string("slug", 160)->unique();
            $table->string("commenti", 50)->nullable();
            $table->string("anno", 7)->required();
            $table->text("descrizione")->nullable();
            $table->string("luogo", 50)->nullable();
            $table->string("genere", 50)->required();
            $table->string("url", 255)->unique();
            $table->string("sezione", 50)->nullable();
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
        Schema::dropIfExists('videos');
    }
}
