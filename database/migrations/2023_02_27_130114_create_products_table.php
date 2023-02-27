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
        //Schema::dropIfExists('products');
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("brand");
            $table->string("model");
            $table->float("price")->unsigned();
            //$table->integer("category_id");
            $table->longText("description")->default("");
            $table->boolean("sale")->default(false);
            $table->string("img")->nullable();

            $table->foreignId('category_id')->constrained('categories');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
