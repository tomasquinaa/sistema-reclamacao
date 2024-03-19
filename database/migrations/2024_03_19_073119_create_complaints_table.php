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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->string('area');
            $table->text('message');
            $table->string('status');
            $table->timestamps(); // Adiciona created_at e updated_at
            $table->softDeletes(); // Adiciona deleted_at

            $table->foreign('client_id')->references('id')->on('clients');
        });

        // Altera os campos para serem nullable
        Schema::table('complaints', function (Blueprint $table) {
            $table->timestamp('updated_at')->nullable()->change();
            $table->timestamp('deleted_at')->nullable()->change();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
