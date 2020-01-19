<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyCustomerIdCartIdStatusIdAndPaymentMethodIdToOrderdetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orderdetails', function (Blueprint $table) {
          $table->foreign("customer_id")->references("id")->on("users")->onDelete("cascade");
          $table->foreign("cart_id")->references("id")->on("carts")->onDelete("cascade");
          $table->foreign("status_id")->references("id")->on("status")->onDelete("cascade");
          $table->foreign("payment_method_id")->references("id")->on("payment_methods")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orderdetails', function (Blueprint $table) {
          $table->dropForeign("orderdetails_customer_id_foreign");
          $table->dropForeign("orderdetails_cart_id_foreign");
          $table->dropForeign("orderdetails_status_id_foreign");
          $table->dropForeign("orderdetails_payment_method_id_foreign");
        });
    }
}
