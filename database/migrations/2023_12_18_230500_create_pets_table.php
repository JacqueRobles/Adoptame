<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('nickname');
            $table->string('type');
            $table->text('biography');
            $table->text('feature');
            $table->boolean('adoption');
            $table->unsignedBigInteger('organization_id');
            // Add any other columns you need
            $table->unsignedBigInteger('profile_photo_id')->nullable();
            $table->unsignedBigInteger('adopter_id')->nullable();
            

            // Foreign key constraint
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
