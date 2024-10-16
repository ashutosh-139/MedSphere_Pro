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
            Schema::create('slots', function (Blueprint $table) {
                  $table->id();
                  $table->foreignId('hospital_id')
                        ->constrained('hospitals', 'id') // Properly referencing the 'id' column in 'hospitals'
                        ->onDelete('cascade');
                  // $table->foreignId('staff_id')
                  // ->constrained('hospital_staff', 'id') // Properly referencing the 'id' column in 'hospitals'
                  // ->onDelete('cascade'); 
                  $table->string('slot');
                  $table->timestamps();
            });

            Schema::create('payments', function (Blueprint $table) {
                  $table->id();
                  $table->foreignId('user_id')
                        ->constrained('users', 'id') // Properly referencing the 'id' column in 'users'
                        ->onDelete('cascade');
                  $table->foreignId('hospital_id')
                        ->constrained('hospitals', 'id') // Properly referencing the 'id' column in 'hospitals'
                        ->onDelete('cascade');
                  $table->integer('payment_amount');
                  $table->string('transection_id')->unique();
                  $table->timestamps();
            });

            Schema::create('appointments', function (Blueprint $table) {
                  $table->id();
                  $table->foreignId('user_id')
                        ->constrained('users', 'id') // Properly referencing the 'id' column in 'users'
                        ->onDelete('cascade');
                  $table->foreignId('hospital_id')
                        ->constrained('hospitals', 'id') // Properly referencing the 'id' column in 'hospitals'
                        ->onDelete('cascade');
                  $table->foreignId('stafff_id')
                        ->constrained('hospital_staff', 'id') // Properly referencing the 'id' column in 'hospital_staff'
                        ->onDelete('cascade');
                  $table->timestamp('appointment_date')->nullable();
                  $table->foreignId('schedule_slot_id')
                        ->constrained('slots', 'id') // Properly referencing the 'id' column in 'slots'
                        ->onDelete('cascade');
                  $table->enum('payment_mode', ['online', 'offline']);
                  $table->foreignId('payment_id')
                        ->constrained('payments', 'id') // Properly referencing the 'id' column in 'payments'
                        ->onDelete('cascade');
                  $table->boolean('status')->default(1);
                  $table->timestamps();
            });
      }

      /**
       * Reverse the migrations.
       */
      public function down(): void
      {
            Schema::dropIfExists('slots');
            Schema::dropIfExists('payments');
            Schema::dropIfExists('appointments');
      }
};
