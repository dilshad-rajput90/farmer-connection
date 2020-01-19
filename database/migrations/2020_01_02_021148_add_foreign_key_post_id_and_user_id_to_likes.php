<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyPostIdAndUserIdToLikes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('likes', function (Blueprint $table) {
          $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
          $table->foreign("post_id")->references("id")->on("posts")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('likes', function (Blueprint $table) {
          $table->dropForeign("likes_user_id_foreign");
          $table->dropForeign("likes_post_id_foreign");
        });
    }
}
