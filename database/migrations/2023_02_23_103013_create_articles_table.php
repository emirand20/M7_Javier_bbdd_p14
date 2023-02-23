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
            $table->string('nombre', 50)->unique();
            $table->text('descripcion');
            $table->float('precio-de-compra', 7,2)->unsigned();
            $table->float('país', 7,2)->unsigned();
            $table->enum('divisa', ['S', 'N']);
            $table->integer('stock')->unsigned();
            $table->text('observaciones')->nullable();
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
