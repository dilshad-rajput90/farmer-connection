<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
						$table->unsignedBigInteger("author_id");
						$table->unsignedBigInteger('post_type_id');
						$table->unsignedBigInteger('status_id');
						$table->text('title');
						$table->text('summary');
						$table->longText('post_content');
						$table->integer('is_success_story');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
