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
        Schema::table('projects', function (Blueprint $table) {
            $table->foreignId('type_id')->nullable()->after('id')->nullOnDelete()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            //annulla la relazione prima di cancellare la tabella
            $table->dropForeign('projects_type_id_foreign');
             //cancella la tabella
            $table->dropColumn('type_id');
        });
    }
};
