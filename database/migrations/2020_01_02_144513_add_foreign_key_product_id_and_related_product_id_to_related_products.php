<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyProductIdAndRelatedProductIdToRelatedProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('related_products', function (Blueprint $table) {
          $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
          $table->foreign('related_product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('related_products', function (Blueprint $table) {
          $table->dropForeign('related_products_product_id_foreign');
          $table->dropForeign('related_products_related_product_id_foreign');
        });
    }
}
