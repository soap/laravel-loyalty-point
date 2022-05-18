<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('expiring_methods', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->enum('expiring_period', ['after', 'end of'])->comment('e.g. after 2 day, end of moth');
            $table->unsignedInteger('expiring_value')->default(0)->comment('used for expiring_period = after, if 0 = not expire');
            $table->enum('expiring_unit', ['day', 'week', 'month', 'year']);
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('expiring_methods');
    }
}