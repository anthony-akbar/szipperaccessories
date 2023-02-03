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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_ru');
            $table->string('title_uz');
            $table->string('subtitle_en')->nullable();
            $table->string('subtitle_ru')->nullable();
            $table->string('subtitle_uz')->nullable();
            $table->string('image');
            $table->longText('description_en');
            $table->longText('description_ru');
            $table->longText('description_uz');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partners');
    }
};
