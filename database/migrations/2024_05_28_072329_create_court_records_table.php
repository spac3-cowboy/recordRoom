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
        Schema::create('court_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('court_id');
            $table->string('serial_number')->nullable();
            $table->date('date_received')->nullable();
            $table->string('case_number')->nullable();
            $table->string('class')->nullable();
            $table->string('file')->nullable();
            $table->date('date_settlement')->nullable();
            $table->text('comments')->nullable();
            $table->timestamps();
        
            $table->foreign('court_id')->references('id')->on('courts')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('court_records');
    }
};
