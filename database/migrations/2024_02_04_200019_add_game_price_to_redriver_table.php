<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('redriver', function (Blueprint $table) {
                    // Add the 'game_price' field as an integer
                    $table->integer('game_price')->after('price')->nullable();
                    // If you want to make it non-nullable, remove the 'nullable()' method call.
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('redriver', function (Blueprint $table) {
            // Reverse the changes made in the 'up' method
          $table->dropColumn('game_price');
               });

    }
};
