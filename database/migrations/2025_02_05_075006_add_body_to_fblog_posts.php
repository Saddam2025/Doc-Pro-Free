<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('fblog_posts', function (Blueprint $table) {
        if (!Schema::hasColumn('fblog_posts', 'body')) { 
            $table->longText('body')->nullable(); // ✅ Add `body` column safely
        }
    });
}

public function down()
{
    Schema::table('fblog_posts', function (Blueprint $table) {
        $table->dropColumn('body');
    });
}

};