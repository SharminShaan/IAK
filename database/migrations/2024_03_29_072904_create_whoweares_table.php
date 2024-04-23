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
        Schema::create('whoweares', function (Blueprint $table) {
            $table->id();
            $table->string('subheading')->nullable();
            $table->string('heading')->nullable();
            $table->text('paragraph')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('list1')->nullable();
            $table->string('list2')->nullable();
            $table->string('list3')->nullable();
            $table->string('list4')->nullable();
            $table->text('bottomparagraph')->nullable();
            $table->string('years')->nullable();
            $table->text('yearsparagraph')->nullable();
            $table->integer('type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('whoweares');
    }
};
