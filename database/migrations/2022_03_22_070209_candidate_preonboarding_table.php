<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CandidatePreonboardingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('candidate_preonboarding', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('recuriter_id');
            $table->string('preonboarding_process');
            $table->integer('type');
            $table->date('date');
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
        Schema::dropIfExists('candidate_preonboarding');
        //
    }
}
