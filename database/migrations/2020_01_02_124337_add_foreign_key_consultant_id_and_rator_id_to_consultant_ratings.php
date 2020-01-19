<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyConsultantIdAndRatorIdToConsultantRatings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consultant_ratings', function (Blueprint $table) {
          $table->foreign('consultant_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('rator_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consultant_ratings', function (Blueprint $table) {
          $table->dropForeign('consultant_ratings_consultant_id_foreign');
          $table->dropForeign('consultant_ratings_rator_id_foreign');
        });
    }
}
