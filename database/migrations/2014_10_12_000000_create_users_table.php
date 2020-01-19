<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
						$table->unsignedBigInteger('profession_id');
						$table->unsignedBigInteger('expertise_id');
						$table->unsignedBigInteger('location_id');
						$table->unsignedBigInteger('status_id');
            $table->string('name');
            $table->string('email')->unique();
						$table->string('mobile_number');
						$table->string('picture_path');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
