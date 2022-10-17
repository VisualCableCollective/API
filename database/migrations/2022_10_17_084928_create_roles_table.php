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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
            $table->boolean('can_access_internal_panel')->default(false);
            $table->boolean('can_access_user_management')->default(false);
            $table->boolean('can_modify_user')->default(false);
            $table->boolean('can_access_role_management')->default(false);
            $table->boolean('can_modify_role')->default(false);
            $table->boolean('can_assign_role')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
