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
        Schema::create('s-_g_a_p_models', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable() ;
            $table->string('phone')->nullable() ;
            $table->string('email')->unique() ;
            $table->tinyInteger('have_certiface')->default(0);
            $table->foreignId('qualification_id')->constrained('qualifications')->cascadeOnUpdate() ;
            $table->string('file')->nullable() ;
            $table->string('s_GAP_file')->nullable() ;
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
        Schema::dropIfExists('s-_g_a_p_models');
    }
};
