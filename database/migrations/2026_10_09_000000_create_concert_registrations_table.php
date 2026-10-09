<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('concert_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 120);
            $table->string('email');
            $table->string('phone', 25);
            $table->string('ticket_category', 40);
            $table->unsignedTinyInteger('ticket_quantity');
            $table->unsignedBigInteger('unit_price');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('concert_registrations');
    }
};
