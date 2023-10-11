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
        Schema::create('consultant_models', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable() ;
            $table->string('phone')->nullable() ;
            $table->string('email')->unique() ;
            $table->integer('experience_years')->nullable();
            $table->integer('experience_years_public')->nullable();
            $table->foreignId('quilifaction')->constrained('qualifications')->cascadeOnUpdate() ;
            $table->foreignId('experience_filed')->constrained('experience_fields')->cascadeOnUpdate() ;
            $table->string('file')->nullable() ;
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
        Schema::dropIfExists('consultant_models');
    }
};
