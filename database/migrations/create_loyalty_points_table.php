<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Kalnoy\Nestedset\NestedSet;

return new class extends Migration
{
    public function up()
    {
        Schema::create('loyalty_points', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('event')->comment('event name generated this action');
            $table->string('description')->nullable();
            $table->bigInteger('points');
            $table->foreignId('expiring_method_id')->constrained();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loyalty_points');
    }
};
