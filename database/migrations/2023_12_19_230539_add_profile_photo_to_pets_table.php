<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfilePhotoToPetsTable extends Migration
{
    public function up()
    {
        Schema::table('pets', function (Blueprint $table) {
            $table->string('profile_photo_path')->nullable();
        });
    }

    public function down()
    {
        Schema::table('pets', function (Blueprint $table) {
            $table->dropColumn('profile_photo_path');
        });
    }
}
