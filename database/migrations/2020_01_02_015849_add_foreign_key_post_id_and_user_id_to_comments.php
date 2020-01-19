<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyPostIdAndUserIdToComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
          $table->foreign("post_id")->references("id")->on("posts")->onDelete("cascade");
          $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
          $table->foreign("status_id")->references("id")->on("status")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
          $table->dropForeign("comments_post_id_foreign");
          $table->dropForeign("comments_user_id_foreign");
          $table->dropForeign("comments_status_id_foreign");
        });
    }
}
