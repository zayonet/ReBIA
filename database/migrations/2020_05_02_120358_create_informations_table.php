<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');

            $table->string('name');
            $table->string('surname');
            $table->string('identity');
            $table->string('birthday');
            $table->string('country');
            $table->string('province');
            $table->string('county');
            $table->string('telemovel');
            $table->string('address');
            $table->string('facebook')->nullable()->default('not');
            $table->string('tweet')->nullable()->default('not');
            $table->string('linkedin')->nullable()->default('not');
            
            $table->string('slug')->default('slug')->nullable();

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informations');
    }
}
