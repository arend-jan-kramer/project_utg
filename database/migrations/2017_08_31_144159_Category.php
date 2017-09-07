<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('category', function (Blueprint $table) {
          $table->increments('id');
          $table->string('category');
          $table->timestamps();
      });

      DB::table('category')->insert([
        ['id' => '1', 'category' => 'Developer', 'created_at' => '2017-08-31 14:12:35', 'updated_at' => '2017-08-31 14:12:35'],
        ['id' => '2', 'category' => 'Text wrider', 'created_at' => '2017-08-31 14:12:35', 'updated_at' => '2017-08-31 14:12:35'],
        ['id' => '3', 'category' => 'Designer', 'created_at' => '2017-08-31 14:12:35', 'updated_at' => '2017-08-31 14:12:35'],
        ['id' => '4', 'category' => 'Lawyer', 'created_at' => '2017-08-31 14:12:35', 'updated_at' => '2017-08-31 14:12:35'],
        ['id' => '5', 'category' => 'Financial', 'created_at' => '2017-08-31 14:12:35', 'updated_at' => '2017-08-31 14:12:35'],
        ['id' => '6', 'category' => 'Marketing', 'created_at' => '2017-08-31 14:12:35', 'updated_at' => '2017-08-31 14:12:35'],
        ['id' => '7', 'category' => 'Accountant', 'created_at' => '2017-08-31 14:12:35', 'updated_at' => '2017-08-31 14:12:35'],
        ['id' => '8', 'category' => 'Translator', 'created_at' => '2017-08-31 14:12:35', 'updated_at' => '2017-08-31 14:12:35'],
        ['id' => '9', 'category' => 'Photographer', 'created_at' => '2017-08-31 14:12:35', 'updated_at' => '2017-08-31 14:12:35'],
      ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
