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
            $table->string('adresse')->nullable();
            $table->string('photo')->nullable();
            $table->string('telephone')->nullable();
            $table->string('statut')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('adresse');
            $table->dropColumn('photo');
            $table->dropColumn('telephone');
            $table->dropColumn('statut');
        });
    }
};
