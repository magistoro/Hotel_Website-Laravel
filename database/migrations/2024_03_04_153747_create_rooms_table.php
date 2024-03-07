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
        Schema::create('rooms', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title', 255)
                ->collation('utf8mb4_unicode_ci')
                ->unique()
                ->index()
                ;
            $table->text('description')
                ->collation('utf8mb4_unicode_ci')
                ;
            $table->decimal('price_per_night', 7, 2)
                ->index()
                ;
           $table->integer('people_count')
                ->index()
                ;
            $table->string('image', 191)
                ->collation('utf8mb4_unicode_ci')
                ->default('default.jpg')
                ;

            $table->foreignId('category_id')
                ->constrained('categories')
                ->cascadeOnDelete()
                ->restrictOnUpdate()
                ;
            $table->index('category_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
