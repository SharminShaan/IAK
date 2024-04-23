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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('subcats_id')->nullable();
            $table->unsignedBigInteger('childcat_id')->nullable();
            $table->string('type')->nullable();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('experience')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('file_upload')->nullable();
            $table->string('youtube')->nullable();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('job_title')->nullable();
            $table->string('vacancy')->nullable();
            $table->string('age')->nullable();
            $table->text('education')->nullable();
            $table->text('responsibilities')->nullable();
            $table->string('compensation')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('location')->nullable();
            $table->string('logo')->nullable();
            $table->string('image')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->date('date')->nullable();
            $table->string('time')->nullable();
            $table->string('venue')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcats_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->foreign('childcat_id')->references('id')->on('child_categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
};
