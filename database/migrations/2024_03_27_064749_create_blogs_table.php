<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_cat_id');
            $table->string('title')->nullable();
            $table->date('date')->nullable();
            $table->string('uploaded_by')->nullable();
            $table->text('comment')->nullable();
            $table->text('long_description')->nullable();
            $table->text('short_description')->nullable();
            $table->text('image')->nullable();
            $table->text('quotation')->nullable();
            $table->string('tags')->nullable();
            $table->timestamps();
            $table->foreign('blog_cat_id')->references('id')->on('blog_cats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
