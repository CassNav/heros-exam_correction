<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() 
    {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string('hero_name', 100);
            $table->string('real_name', 255);
            $table->string('gender', 50);
            $table->unsignedBigInteger('universe_id');
            $table->unsignedBigInteger('logo_id');

            $table->foreign('universe_id')->references('id')->on('universes');
            $table->foreign('logo_id')->references('id')->on('logos');
        
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('superheroes');
    }
};
