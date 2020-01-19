<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyConsultantIdAndCategoryIdToConsultantCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consultant_category', function (Blueprint $table) {
          $table->foreign("consultant_id")->references("id")->on("users")->onDelete("cascade");
          $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consultant_category', function (Blueprint $table) {
          $table->dropForeign("consultant_category_consultant_id_foreign");
          $table->dropForeign("consultant_category_category_id_foreign");
        });
    }
}
