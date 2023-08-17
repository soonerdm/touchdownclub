<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedriverTable extends Migration
{
    public function up()
    {
        Schema::create('redriver', function (Blueprint $table) {
            $table->id();
            $table->boolean('active');
            $table->string('title');
            $table->text('details');
            $table->integer('bus_tickets');
            $table->float('price');
            $table->text('home_content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('redriver');
    }
}
