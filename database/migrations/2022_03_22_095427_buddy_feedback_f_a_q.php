<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuddyFeedbackFAQ extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BuddyFeedbackFAQ', function (Blueprint $table) {
            $table->id();
            $table->string("emp_id");
            $table->string("buddy_id");
            $table->string("Buddy_feedback_fields");
            $table->integer("feedback");
            $table->integer("remarks");
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
        //
    }
}
