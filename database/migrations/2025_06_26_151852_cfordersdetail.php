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
            $table->integer('OrderID');
            $table->integer('ProductID');
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
