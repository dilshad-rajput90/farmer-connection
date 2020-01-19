<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyPostIdAndCategoryIdToPostCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_categories', function (Blueprint $table) {
          $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
          $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
			Schema::table('post_categories', function (Blueprint $table) {
				$table->dropForeign('post_categories_post_id_foreign');
				$table->dropForeign('post_categories_category_id_foreign');
			});
    }
}
