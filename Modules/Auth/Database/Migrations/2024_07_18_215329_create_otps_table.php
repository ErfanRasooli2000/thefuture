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
        Schema::create('otps', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->timestamp('expires_at')->nullable();
            $table->boolean('is_used')->default(0);

            $table->string('causer_type');
            $table->unsignedBigInteger('causer_id');

            $table->enum('type' , \Api\Auth\Enums\OtpTypeEnum::values());

            $table->timestamps();

            $table->index(['causer_id' , 'causer_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('otps');
    }
};
