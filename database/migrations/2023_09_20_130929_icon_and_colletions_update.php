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
        Schema::table('categories', function (Blueprint $table) {
            $table->foreign('icon_id')->references('id')->on('icons');
            $table->unsignedBigInteger('icon_id')->nullable()->default(null);
            $table->foreign('collection_id')->references('id')->on('collections');
            $table->unsignedBigInteger('collection_id')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
