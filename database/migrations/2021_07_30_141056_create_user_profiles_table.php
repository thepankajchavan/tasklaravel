<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('profile_image_url')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('mobile')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('pan_card_image_url')->nullable();
            $table->string('adhar_front_image_url')->nullable();
            $table->string('adhar_back_image_url')->nullable();
            $table->string('check_passbook_image_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
