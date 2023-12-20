<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdopterToPetsTable extends Migration
{
    public function up()
    {
        Schema::table('pets', function (Blueprint $table) {
            $table->unsignedBigInteger('adopter_id')->nullable();
            $table->foreign('adopter_id')->references('id')->on('user')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('pets', function (Blueprint $table) {
            $table->dropForeign(['adopter_id']);
            $table->dropColumn('adopter_id');
        });
    }
}
