<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //method yang akan kita jalankan (migrad) yaitu pada up ini
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {//berarti ini dia menyuruh untuk membuat orm nya itu sesuai kolom dan yang dibuat adalah id & timestamps
            $table->id();
            $table->string('name');
            $table->string('city');
            $table->text('description')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    //down digunakan seperti undo atau kembali
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
