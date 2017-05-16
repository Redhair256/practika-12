<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_id', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('token'); 
            $table->char('ip', 15); 
            $table->char('browser', 64); 
            $table->char('os', 32);  
            $table->char('target_url', 255);
            $table->timestamp('created_ad'); 
            $table->integer('link_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_id');
    }
}
