<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('loyalty_point_trackings', function (Blueprint $table) {
            $table->id();

            $table->morphs('pointable');
            $table->foreignId('loyalty_point_id');
            $table->bigInteger('points');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loyalty_point_trackings');
    }
};
