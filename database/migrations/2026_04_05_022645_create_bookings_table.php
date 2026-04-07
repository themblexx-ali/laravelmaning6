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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_hp');
            $table->date('tanggal');
            $table->foreignId('jam_slot_id')->constrained()->onDelete('cascade');
            $table->time('jam');
            $table->timestamps();
            $table->string('payment_method')->nullable();
            $table->string('payment_status')->default('pending');
            $table->string('bukti_transfer')->nullable();
            $table->integer('total_harga')->default(0);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
