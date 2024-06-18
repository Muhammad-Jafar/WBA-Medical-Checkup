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
        Schema::create('applications', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('patient_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('doctor_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('purposes');
            $table->string('height_body', 20)->nullable();
            $table->string('mass_body', 20)->nullable();
            $table->string('blod_type', 20)->nullable();
            $table->string('blod_pressure', 20)->nullable();
            $table->string('colesterol', 20)->nullable();
            $table->string('blod_sugar', 20)->nullable();
            $table->date('requested_at');
            $table->enum('status', ['PENDING','APPROVED','REJECTED'])->default('PENDING');
            $table->date('approved_at')->nullable();
            $table->date('rejected_at')->nullable();
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
        Schema::dropIfExists('applications');
    }
};
