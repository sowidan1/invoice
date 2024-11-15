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
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->increments('lineNo');
            $table->string('productName',100);
            $table->integer('unitNo')->unsigned();
            $table->foreign('unitNo')->references('unitNo')->on('units')->onDelete('cascade');
            $table->decimal('price');
            $table->decimal('quantity');
            $table->decimal('total');
            $table->dateTime('expiryDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_details');
    }
};
