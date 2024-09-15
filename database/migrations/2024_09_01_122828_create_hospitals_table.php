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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id('_id');
            $table->string('name');
            $table->string('address');
            $table->longText('description');
            $table->string('contact_no')->unique();
            $table->string('contact_mail')->unique();
            $table->string('hospital_img')->nullable();
            $table->integer('appointment_fee');
            $table->string('payment_id')->unique();
            $table->string('start_time');
            $table->string('close_time');
            $table->timestamps();
        });

        Schema::create('hospital_staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hospital_id')
                  ->constrained('hospitals', '_id') // Properly referencing the '_id' column in 'hospitals'
                  ->onDelete('cascade');
            $table->string('staff_id')->nullable();
            $table->string('name');
            $table->string('contact_no')->unique();
            $table->string('contact_mail')->unique();
            $table->string('doc_img')->nullable();
            $table->string('specialization')->nullable();
            $table->boolean('holiday')->default(0);
            $table->boolean('status')->default(1);
            $table->dateTime('joing_date');
            $table->dateTime('leaving_date')->nullable();
            $table->timestamps();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hospital_id')
                  ->constrained('hospitals', '_id') // Properly referencing the '_id' column in 'hospitals'
                  ->onDelete('cascade');
            $table->foreignId('user_id')
                  ->constrained('users', 'id') // Properly referencing the 'id' column in 'users'
                  ->onDelete('cascade');
            $table->integer('review');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
        Schema::dropIfExists('hospital_staff');
        Schema::dropIfExists('reviews');
    }
};
