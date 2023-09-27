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
            $table->string('sex')->nullable();
            $table->integer('experience_years')->nullable();
            $table->foreignId('qualification_id')->constrained('qualifications')->cascadeOnUpdate() ;
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
