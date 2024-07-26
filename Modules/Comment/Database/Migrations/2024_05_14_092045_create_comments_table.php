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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('text');
            $table->unsignedBigInteger('answer_to')->nullable();
            $table->boolean('active')->default(false);
            $table->unsignedBigInteger('created_by');
            $table->string('creator_type');
            $table->unsignedBigInteger('modelable_id');
            $table->string('modelable_type');
            $table->timestamps();

            $table->foreign('answer_to')->references('id')->on('comments')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
