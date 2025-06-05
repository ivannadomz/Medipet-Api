<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('races', function (Blueprint $table) {
            $table->id('id'); 
            $table->unsignedBigInteger('species_id'); 
            $table->string('name'); 

            $table->foreign('species_id')->references('id')->on('species')->onDelete('cascade');

            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('races');
    }
};
