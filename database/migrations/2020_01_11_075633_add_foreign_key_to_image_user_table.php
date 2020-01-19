<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToImageUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('image_user', function (Blueprint $table) {

            $table->foreign("product_id")->references("id")->on("products")->onDelete("cascade");
            $table->foreign("image_id")->references("id")->on("images")->onDelete("cascade");

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('image_user', function (Blueprint $table) {
            //
        });
    }
}
