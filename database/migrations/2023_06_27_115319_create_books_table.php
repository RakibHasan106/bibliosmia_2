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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_name');
            $table->string('slug');
            $table->integer('price');
            $table->integer('book_category_id');
            $table->string('book_category_name');
            $table->integer('book_publisher_id');
            $table->string('book_publisher_name');
            $table->text('book_description');
            $table->integer('book_page_no');
            $table->date('book_publish_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
