<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_coupons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Make sure the data type matches 'id' in 'users' table
            $table->unsignedBigInteger('coupon_id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')->onDelete('cascade');
            
            $table->foreign('coupon_id')
                ->references('id')
                ->on('coupons')->onDelete('cascade');
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
        Schema::dropIfExists('users_coupons');
    }
}
