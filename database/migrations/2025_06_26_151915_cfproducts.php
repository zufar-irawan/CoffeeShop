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
        Schema::create('cfproducts', function (Blueprint $table) {
            $table->id('ID');
            $table->string('ProductName');
            $table->string('Category');
            $table->string('Price');
            $table->text('Description');
            $table->string('Image1')->nullable(true);
            $table->string('Image2')->nullable(true);
            $table->string('Image3')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cfproducts');
    }
};
