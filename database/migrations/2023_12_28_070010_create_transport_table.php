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
        Schema::create('transport', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
            $table->string("d_name");
            $table->string("d_email");
            $table->string("d_phone");
            $table->longText("d_addr");
            $table->longText("d_addr2")->nullable();
            $table->String("d_country");
            $table->string("d_city");
            $table->string("d_region");
            $table->string("d_postal");
            $table->string("p_name");
            $table->string("p_phone");
            $table->longText("p_addr");
            $table->longText("p_addr2")->nullable();
            $table->String("p_country");
            $table->string("p_city");
            $table->string("p_region");
            $table->string("p_postal");
            $table->string("status");
            $table->foreignId("company_id");
            $table->foreign('company_id')->references('id')->on('company')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport');
    }
};
