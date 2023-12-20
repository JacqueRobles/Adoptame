<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfilePhotoToPetsTable extends Migration
{
    public function up()
    {
        Schema::table('pets', function (Blueprint $table) {
            $table->unsignedBigInteger('profile_photo_id')->nullable();
            $table->foreign('profile_photo_id')->references('id')->on('images')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('pets', function (Blueprint $table) {
            $table->dropForeign(['profile_photo_id']);
            $table->dropColumn('profile_photo_id');
        });
    }
}
