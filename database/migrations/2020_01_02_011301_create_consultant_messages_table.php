<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultant_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
						$table->unsignedBigInteger('sender_id');
						$table->unsignedBigInteger('reciever_id');
						$table->unsignedBigInteger('parent_id')->default(0);
						$table->string('message');
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
        Schema::dropIfExists('consultant_messages');
    }
}
