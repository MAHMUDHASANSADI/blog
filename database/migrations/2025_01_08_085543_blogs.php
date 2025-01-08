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
        schema::dropIfExists('blogs');
        schema::create('blogs',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('content');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('blog_categories')->onDelete('restrict')->onUpdate('cascade');
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('blogs');
    }
};
