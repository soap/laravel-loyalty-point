<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('loyalty_point_transactions', function (Blueprint $table) {
            $table->id();

            $table->morphs('sourceable'); // source earning point or redeem
            $table->morphs('pointable');  // object who get or use point 
            $table->bigInteger('points'); // positive or negative number
            $table->boolean('redeemable')->default(1)->comment('redeemable or not');
            $table->timestamp('expiring_date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loyalty_point_transactions');
    }
};
