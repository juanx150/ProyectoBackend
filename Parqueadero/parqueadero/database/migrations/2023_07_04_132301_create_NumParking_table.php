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
        Schema::create('parking', function (Blueprint $table) {
            $table->id();
            $table->string('NumParking', 6)->unique();
            $table->string('TipoVehiculo',60);
            $table->string('ParkingEsta',60);
            $table->integer("Precio");

            $table->foreignId('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parking');
    }
};
