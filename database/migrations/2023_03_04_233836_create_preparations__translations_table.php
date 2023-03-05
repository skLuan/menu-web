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
        Schema::create('food_preparation_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('food_preparation_id')->unsigned()->nullable()->constrained('food_preparations');
            $table->string('locale')->index();
            $table->string('name');
            $table->string('description')->nullable();

            $table->unique(['food_preparation_id', 'locale']);

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
        Schema::dropIfExists('food_preparation_translations');
    }
};
