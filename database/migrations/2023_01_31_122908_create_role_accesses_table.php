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
        Schema::create('role_accesses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->boolean('can_add_admin')->default(true);
            $table->boolean('can_delete_admin')->default(true);
            $table->boolean('can_edit_admin')->default(true);
            $table->boolean('can_see_reports')->default(true);
            $table->boolean('can_delete_reports')->default(true);
            $table->boolean('can_manage_categories')->default(true);
            $table->boolean('can_manage_suppliers')->default(true);
            $table->boolean('can_manage_slider')->default(true);
            $table->boolean('can_manage_buyers')->default(true);
            $table->boolean('can_manage_products')->default(true);
            $table->boolean('can_add_role')->default(true);
            $table->boolean('can_delete_role')->default(true);
            $table->boolean('can_edit_role')->default(true);
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
        Schema::dropIfExists('role_accesses');
    }
};
