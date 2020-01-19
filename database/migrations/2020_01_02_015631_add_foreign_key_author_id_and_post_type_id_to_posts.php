<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyAuthorIdAndPostTypeIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
          $table->foreign("author_id")->references("id")->on("users")->onDelete("cascade");
          $table->foreign("post_type_id")->references("id")->on("post_types")->onDelete("cascade");
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
        Schema::table('posts', function (Blueprint $table) {
          $table->dropForeign("posts_author_id_foreign");
          $table->dropForeign("posts_post_type_id_foreign");
          $table->dropForeign("posts_status_id_foreign");
        });
    }
}
