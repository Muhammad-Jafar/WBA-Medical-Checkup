<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignId('user_id')->constrained('users')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignUlid('patient_id')->constrained('patients')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('doctor_id')->nullable()->constrained('doctors')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('checkuptype_id')->constrained('checkup_types')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('purposes');
            $table->string('height_body', 20)->nullable();
            $table->string('mass_body', 20)->nullable();
            $table->string('blod_type', 20)->nullable();
            $table->string('blod_pressure', 20)->nullable();
            $table->string('colesterol', 20)->nullable();
            $table->string('blod_sugar', 20)->nullable();

            $table->string('amphe', 20)->nullable()
                ->comment('Amphetamine');
            $table->string('metham', 20)->nullable()
                ->comment('Methamphetamine (Includes Ecstasy)');
            $table->string('benzo', 20)->nullable()
                ->comment('Benzodiazepine');
            $table->string('thc', 20)->nullable()
                ->comment('Tetrahidrokannabinol');
            $table->string('cocain', 20)->nullable()
                ->comment('Cocain');
            $table->string('opiate', 20)->nullable()
                ->comment('Opiate');

            $table->date('requested_at');
            $table->enum('status', ['PENDING', 'APPROVED', 'REJECTED'])->default('PENDING');
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
