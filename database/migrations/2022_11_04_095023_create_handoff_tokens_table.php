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
        Schema::create('handoff_tokens', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(\App\Models\User::class);
            $table->enum('service', \App\Enums\Service::values());
            $table->enum('tool', \App\Enums\Tool::values());
            $table->timestamps();
            $table->boolean('is_used')->default(false);
            $table->ipAddress('user_ip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('handoff_tokens');
    }
};
