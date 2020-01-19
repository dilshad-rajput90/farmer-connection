<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyPostIdAndMimeTypeIdToAttachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attachments', function (Blueprint $table) {
          $table->foreign("post_id")->references("id")->on("posts")->onDelete("cascade");
          $table->foreign("mime_type_id")->references("id")->on("mime_type")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attachments', function (Blueprint $table) {
          $table->dropForeign("attachments_post_id_foreign");
          $table->dropForeign("attachments_mime_type_id_foreign");
        });
    }
}
