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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50)->unique();
            $table->text('descripcio');
            $table->float('preu-compra', 7,2)->unsigned();
            $table->float('preu-venta', 7,2)->unsigned();
            $table->enum('enviament_domicili', ['S', 'N']);
            $table->integer('stock')->unsigned();
            $table->text('observations')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
