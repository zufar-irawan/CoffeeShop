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
        Schema::create('cforders', function (Blueprint $table) {
            $table->id('ID');
            $table->integer('CustomerID');
            $table->date('OrderDate');
            $table->string('TotalPrice');
            $table->string('Payment');
            $table->string('Address');
            $table->string('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cforders');
    }
};
