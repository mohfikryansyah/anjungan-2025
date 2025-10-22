<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('i_s_d_h_t_l_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('title');
            $table->text('body');
            $table->string('file')->nullable();
            $table->string('navigation')->default('');
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('i_s_d_h_t_l_s');
    }
};
