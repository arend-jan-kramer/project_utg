<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Project extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('projects', function (Blueprint $table) {
          $table->increments('id');
          $table->string('user_id')->nullable();
          $table->string('author_id');
          $table->string('title');
          $table->longText('description');
          $table->string('price');
          $table->string('new_price')->nullable();
          $table->string('category');
          $table->timestamps();
      });

      DB::table('projects')->insert([
        'user_id' => '1',
        'author_id' => '2',
        'title' =>'toegewezen + bonus',
        'description' => 'dit is de omschrijving voor een project die aangenomen is door opdracht nemer',
        'price' => '12.00',
        'new_price' => '13.95',
        'category' => '1'
      ]);

      DB::table('projects')->insert([
        'user_id' => null,
        'author_id' => '2',
        'title' =>'Bonus + niet toegewezen',
        'description' => 'dit is de omschrijving voor een tweede zonder opdracht nemer',
        'price' => '12.00',
        'new_price' => '13.95',
        'category' => '1'
      ]);

      DB::table('projects')->insert([
        'user_id' => null,
        'author_id' => '2',
        'title' =>'Standaard',
        'description' => 'dit project heeft geen bonus',
        'price' => '12.00',
        'new_price' => null,
        'category' => '1'
      ]);

      DB::table('projects')->insert([
        'user_id' => null,
        'author_id' => '1',
        'title' =>'Default',
        'description' => 'Default text for this project!',
        'price' => '75.00',
        'new_price' => null,
        'category' => '1'
      ]);

      DB::table('projects')->insert([
        'user_id' => null,
        'author_id' => '1',
        'title' =>'Default',
        'description' => 'Default text for this project!',
        'price' => '75.00',
        'new_price' => null,
        'category' => '1'
      ]);

      DB::table('projects')->insert([
        'user_id' => null,
        'author_id' => '1',
        'title' =>'Default',
        'description' => 'Default text for this project!',
        'price' => '75.00',
        'new_price' => null,
        'category' => '1'
      ]);

      DB::table('projects')->insert([
        'user_id' => null,
        'author_id' => '1',
        'title' =>'Default',
        'description' => 'Default text for this project!',
        'price' => '75.00',
        'new_price' => null,
        'category' => '1'
      ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
