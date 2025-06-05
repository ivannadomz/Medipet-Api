<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birthdate');
            $table->enum('gender', ['H', 'M']);
            $table->decimal('weight', 5, 2);
            $table->text('allergies')->nullable();

            $table->unsignedBigInteger('species_id');
            $table->unsignedBigInteger('owner_id'); 

            $table->foreign('species_id')->references('id')->on('species')->onDelete('cascade');

            $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
