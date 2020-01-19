<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyConsultantIdAndReviewerIdToConsultantReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consultant_reviews', function (Blueprint $table) {
          $table->foreign('consultant_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('reviewer_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consultant_reviews', function (Blueprint $table) {
          $table->dropForeign('consultant_reviews_consultant_id_foreign');
          $table->dropForeign('consultant_reviews_reviewer_id_foreign');
        });
    }
}
