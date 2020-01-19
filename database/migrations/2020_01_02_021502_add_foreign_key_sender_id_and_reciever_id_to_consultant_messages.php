<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeySenderIdAndRecieverIdToConsultantMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consultant_messages', function (Blueprint $table) {
          $table->foreign("sender_id")->references("id")->on("users")->onDelete("cascade");
          $table->foreign("reciever_id")->references("id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consultant_messages', function (Blueprint $table) {
          $table->dropForeign("consultant_messages_sender_id_foreign");
          $table->dropForeign("consultant_messages_reciever_id_foreign");
        });
    }
}
