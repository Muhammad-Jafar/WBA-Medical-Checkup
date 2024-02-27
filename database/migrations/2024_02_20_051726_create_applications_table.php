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
            $table->uuid('id')->primary();
            // $table->foreign('patient_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('request_by');
            $table->integer('handle_by');
            $table->string('purposes');
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
