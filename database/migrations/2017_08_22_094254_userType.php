<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('usertype', function (Blueprint $table) {
          $table->increments('id');
          $table->char('user_type');
          $table->timestamp('created_at')->nullable();
      });

      DB::table('userType')->insert([
        [
          'id' => '1',
          'user_type' => 'admin',
          'created_at' => '2017-08-22 20:12:33'
        ],
        [
          'id' => '2',
          'user_type' => 'employee',
          'created_at' => '2017-08-22 20:12:33'
        ],
        [
          'id' => '3',
          'user_type' => 'customer',
          'created_at' => '2017-08-22 20:12:33'
        ]
      ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usertype');
    }
}
