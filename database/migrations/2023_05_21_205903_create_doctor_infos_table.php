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
        Schema::create('doctor_infos', function (Blueprint $table) {
            $table->id();
            $table->integer("experience");
            $table->string("special");
            $table->string("Liscen");
            $table->unsignedBigInteger("doctor_id");
            $table->timestamps();
            $table->foreign("doctor_id")
            ->references("id")
            ->on("doctors")
            ->onUpdate("cascade")
            ->onDelete("restrict");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_infos');
    }
};
