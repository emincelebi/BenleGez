<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('advert', function (Blueprint $table) {
            $table->id();
            $table->string('fromwhere');
            $table->string('towhere');
            $table->string('when');
            $table->string('car');
            $table->string('price');
            $table->string('nickname');
            $table->rememberToken();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('advert');
    }
};

