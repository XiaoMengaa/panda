<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('udetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->enum('sex',['w','m']);
            $table->string('pic');
            $table->string('synopsis');
            $table->integer('phone');
            $table->string('email');
            $table->enum('jurisdiction',[1,2])->default(1);
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
        Schema::dropIfExists('udetails');
    }
}
