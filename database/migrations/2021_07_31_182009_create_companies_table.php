<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable(); //Cash Generator or service provider
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('description')->nullable();
            $table->string('contact_number')->nullable();
            $table->bigInteger('city_id')->nullable();
            $table->bigInteger('state_id')->nullable();
            $table->string('pan_number')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('companies');
    }
}
