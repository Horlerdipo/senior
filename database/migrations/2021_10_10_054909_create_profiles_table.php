<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->string('occupation')->nullable();
            $table->string('alcohol_in_take')->nullable();
            $table->string('allergy')->nullable();
            $table->string('do_you_have_family_history_of_diabetes')->nullable();
            $table->string('do_you_have_family_history_of_hypertension')->nullable();
            $table->string('previous_surgical_history')->nullable();
            $table->string('past_medical_history')->nullable();
            $table->string('last_blood_sugar_value')->nullable();
            $table->string('last_blood_pressure_value_checked')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('profiles');
    }
}
