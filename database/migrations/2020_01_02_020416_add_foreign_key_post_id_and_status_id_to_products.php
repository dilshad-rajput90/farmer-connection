<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyPostIdAndStatusIdToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
          $table->foreign("post_id")->references("id")->on("posts")->onDelete("cascade");
          $table->foreign("product_location_id")->references("id")->on("cities")->onDelete("cascade");
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
        Schema::table('products', function (Blueprint $table) {
          $table->dropForeign("products_post_id_foreign");
          $table->dropForeign("products_product_location_id_foreign");
          $table->dropForeign("products_status_id_foreign");
        });
    }
}
