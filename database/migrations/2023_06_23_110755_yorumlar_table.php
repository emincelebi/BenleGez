<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('yorumlar', function (Blueprint $table) {
            $table->id();
            $table->string('ilanid');
            $table->string('message');
            $table->string('username');
            $table->rememberToken();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('yorumlar');
    }
};
