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
        Schema::create('catalog_banner', function (Blueprint $table) {
            $table->id();

            $table->foreignId('banner_id')
            ->references('id')
            ->on('banners')
            ->cascadeOnDelete()
            ->cascaseOnUpdate();

            $table->foreignId('catalog_id')
                ->references('id')
                ->on('catalogs')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogs_banners');
    }
};
