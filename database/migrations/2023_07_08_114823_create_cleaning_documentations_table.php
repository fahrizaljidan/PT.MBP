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
        Schema::create('cleaning_documentations', function (Blueprint $table) {
            $table->id();
            $table->string('id_dokumentasi')->unique();
            $table->string('id_users_pengawas',10);
            $table->string('nama_file',100);
            $table->string('keterangan',20);
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cleaning_documentations');
    }
};
