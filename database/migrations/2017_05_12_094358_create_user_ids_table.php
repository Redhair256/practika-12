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
        Schema::create('user_ids', function (Blueprint $table) {
            $table->increments('id');
            $table->char('token',20); 
            $table->char('browser', 64); 
            $table->char('os', 32);  
            $table->integer('link_id');
            $table->timestamp('created_at'); 
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_ids');
    }
}
