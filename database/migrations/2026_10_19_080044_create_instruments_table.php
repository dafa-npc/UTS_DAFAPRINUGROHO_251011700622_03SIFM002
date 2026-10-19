<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('instruments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand')->index();
            $table->unsignedBigInteger('price');   // disimpan dalam Rupiah (tanpa desimal)
            $table->text('description');
            $table->string('image');               // nama file di public/assets/images/
            $table->string('type')->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('instruments');
    }
};