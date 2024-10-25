<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('ad_space_owners', function (Blueprint $table) {
            $table->string('country')->nullable();
            $table->string('business_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ad_space_owners', function (Blueprint $table) {
            $table->dropColumn(['country', 'business_type']);
        });
    }
};
