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
        Schema::create('cfordersdetail', function (Blueprint $table) {
            $table->id('ID');
            $table->unsignedBigInteger('OrderID');
            $table->foreign('OrderID')->references('ID')->on('cforders')->onDelete('cascade');
            $table->unsignedBigInteger('ProductID');
            $table->foreign('ProductID')->references('ID')->on('cfproduct')->onDelete('cascade');
            $table->string('Quantity');
            $table->string('Subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cfordersdetail');
    }
};
