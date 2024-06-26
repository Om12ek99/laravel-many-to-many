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
        Schema::table('project', function (Blueprint $table) {
            $table->unsignedBigInteger('tech_id')->nullable()->after('content');
            $table->foreign('tech_id')->references('id')->on('technologies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('project', function (Blueprint $table) {
            $table->dropForeign('project_tech_id_foreign');
            $table->dropColumn('tech_id');
        });
    }
};
