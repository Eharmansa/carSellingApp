<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_brand_models', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('brand_id');


            $table->softDeletes();
            $table->timestamps();

            $table->foreign('brand_id')->on('car_brands')->references('id')->onDelete('cascade');

        });
    }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_brand_models');
    }
};
