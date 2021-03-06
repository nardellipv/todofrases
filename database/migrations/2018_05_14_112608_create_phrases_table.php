<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhrasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phrases', function (Blueprint $table) {
            $table->increments('id');

            $table->mediumText('text');
            $table->string('image')->nullable();
            $table->string('author');
            $table->enum('status', ['APPROVED','PENDING','REJECTED'])->dafault('PENDING');

            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->timestamps();


            //relaciones

            $table->foreign('user_id')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phrases');
    }
}
