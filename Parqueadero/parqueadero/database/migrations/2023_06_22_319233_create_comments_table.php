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
        Schema::create('comments', function (Blueprint $table) {
            // id
            $table->id();
            $table->text('message');
            $table->foreignId('user_id');
            $table->foreignId('parking_id');
            // creation datos
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('parking_id')
                    ->references('id')->on('parking')
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
        Schema::dropIfExists('parkingD');
        Schema::dropIfExists('vehiculos');
        Schema::dropIfExists('users');
    }
};
