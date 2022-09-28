<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
           public function up()
    {
        Schema::create('Post', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("body");
            $table->string("email");
            $table->string("phon");
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('Post');
    }
};
