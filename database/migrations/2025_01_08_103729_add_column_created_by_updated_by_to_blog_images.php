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
        Schema::table('blog_images', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->after('updated_at');
            $table->unsignedBigInteger('updated_by')->after('created_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blog_images', function (Blueprint $table) {
            //
        });
    }
};
