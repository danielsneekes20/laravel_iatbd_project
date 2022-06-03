<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->string("kind");
            $table->float("hourly");
            $table->unsignedBigInteger('respons')->nullable();
            // $table->unsignedBigInteger('user_id');
            $table->string("important");
            // $table->integer("owner_id");
            $table->foreign("kind")->references("kind")->on("kind_of_animal");
            // $table->foreign("user_id")->references("id")->on("users")->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('user_id')->nullable()->onUpdate('cascade')->constrained();
            // $table->integer('user_id')->unsigned();
            // $table->foreign('user_id')->references('id')->on('users');

            // $table->string("owner_name");
            // $table->string("location");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('animal', function(Blueprint $table){
            $table->dropForeign("animal_kind_foreign");

        });
        Schema::dropIfExists('animal');
    }
}
