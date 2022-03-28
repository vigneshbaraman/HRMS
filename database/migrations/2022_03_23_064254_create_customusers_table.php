<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models;

class CreateCustomusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customusers', function (Blueprint $table) {
           $table->increments('id');
          $table->string('empID');
          $table->string('username');
          $table->string('passcode');
          $table->string('email');
          $table->string('role_type');
          $table->boolean('active');
          $table->rememberToken();
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
        Schema::dropIfExists('customusers');
    }
}
