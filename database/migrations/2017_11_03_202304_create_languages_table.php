<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
          $table->increments('id');
          $table->string('language')->nullable();
          $table->string('translation');
          $table->timestamps();
        });

        DB::table('languages')->insert([
          [
            'language' => 'nl',
            'translation' => 'home',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages', function (Blueprint $table) {
            //
        });
    }
}
