<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyProfessionIdExpertiseIdAndLocationIdToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
					$table->foreign("profession_id")->references("id")->on("professions")->onDelete("cascade");
					$table->foreign("expertise_id")->references("id")->on("expertises")->onDelete("cascade");
					$table->foreign("location_id")->references("id")->on("cities")->onDelete("cascade");
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
        Schema::table('users', function (Blueprint $table) {
          $table->dropForeign("users_profession_id_foreign");
          $table->dropForeign("users_expertise_id_foreign");
          $table->dropForeign("users_location_id_foreign");
          $table->dropForeign("users_status_id_foreign");
        });
    }
}
