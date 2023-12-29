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
            $table->boolean('adoption')->default(false);
            $table->foreignId('organization_id')->constrained('users')->onDelete('restrict');
            $table->foreignId('adopter_id')->nullable()->constrained('users')->onDelete('restrict');
            $table->foreignId('profile_photo_id')->nullable()->constrained('images')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
