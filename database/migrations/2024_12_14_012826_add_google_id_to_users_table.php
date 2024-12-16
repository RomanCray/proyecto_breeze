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
        Schema::table('users', function (Blueprint $table) {
            $table->string('google_id')->nullable()->before('remember_token');
            $table->string('nombres')->nullable()->before('google_id');
            $table->string('apellidos')->nullable()->before('nombres');
            $table->text('picture')->nullable()->before('apellidos');
            $table->boolean('status')->nullable()->default(true)->before('picture');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('google_id');
            $table->dropColumn('nombres');
            $table->dropcolumn('apellidos');
            $table->dropcolumn('pictures');
            $table->dropColumn('status');
        });
    }
};
