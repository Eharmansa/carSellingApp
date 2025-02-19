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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            $table->UnsignedBigInteger('user_id');
            $table->UnsignedBigInteger('model_id');
            $table->UnsignedBigInteger('damage_id');
            $table->UnsignedBigInteger('district_id');
            $table->integer('year');
            $table->string('colour');
            $table->integer('kilometers');
            $table->boolean('insurance_status')->comment('0 -> Sigorta yok , 1 -> Sigorta var');
            $table->tinyInteger('gear_type')->comment('0 -> Manuel , 2 -> Otomatik , 3 -> Yarıotomatik');
            $table->tinyInteger('fuel_type')->comment('0 -> Benzin , 1 -> Dizel , 2 -> Elektrik , 3 -> Lpg');
            $table->text('description')->nullable();
            $table->dateTime('publish_date');
            $table->boolean('status')->comment('0 -> İlanda değil, 1 -> İlanda');


            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
            $table->foreign('model_id')->on('car_brand_models')->references('id')->onDelete('cascade');
            $table->foreign('damage_id')->on('damage_records')->references('id')->onDelete('cascade');
            $table->foreign('district_id')->on('districts')->references('id')->onDelete('cascade');


            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
