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
            $table->unsignedBigInteger('type_id')->nullable()->after('title');
            $table->foreign('type_id')->references('id')->on('type');
        });
    }

    /**
     * Reverse the migrations.
     */ 
    public function down(): void
    {
        Schema::table('project', function (Blueprint $table) {
            $table->dropForeign('project_type_id_foreign');
            $table->dropColumn('type_id');
        });
    }
};
