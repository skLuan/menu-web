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
        //
        Schema::create('multimedia_urls', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->integer('type'); // 0 is Icon, 1 is image
            // $table->foreignId('icon_multimedia_id')->nullable();
            // $table->foreignId('dish_id')->constrained('dishes');
            // $table->foreignId('category_id')->constrained('categories');
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
        //
    }
};
