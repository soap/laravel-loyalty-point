<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('royalty_point_trackings', function (Blueprint $table) {
            $table->id();

            $table->morphs('pointable');
            $table->foreignId('royalt_point_id');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('royalty_point_trackings');
    }
};
