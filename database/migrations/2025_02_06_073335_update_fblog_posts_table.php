<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('fblog_posts', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->change();
            $table->string('cover_photo_path')->nullable()->default('default-image.jpg')->change();
            $table->string('photo_alt_text')->nullable()->default('Default Alt Text')->change();
        });
    }

    public function down()
    {
        Schema::table('fblog_posts', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable(false)->change();
            $table->string('cover_photo_path')->nullable(false)->change();
            $table->string('photo_alt_text')->nullable(false)->change();
        });
    }
};
