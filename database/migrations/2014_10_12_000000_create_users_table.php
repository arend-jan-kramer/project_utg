<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('userType_id');
            $table->string('userCategory_id');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
          [
            'first_name' => 'Arend-Jan',
            'last_name' => 'Kramer',
            'email' => 'arend-jan93@hotmail.com',
            'password' => '$2y$10$QuPSb9xyONaBX09jVsao5uXuS9xWRqqw5.ozbU4fhXrP10WoCYulC',
            'userType_id' => '1',
            'userCategory_id' => '3',
            // 'remember_token	' => null,
            'created_at' => '2017-11-13 11:16:20',
            'updated_at' => '2017-11-13 11:16:20',
          ],
          [
            'first_name' => 'Jan',
            'last_name' => 'Kramer',
            'email' => 'arend-jan@hotmail.com',
            'password' => '$2y$10$QuPSb9xyONaBX09jVsao5uXuS9xWRqqw5.ozbU4fhXrP10WoCYulC',
            'userType_id' => '2',
            'userCategory_id' => '3',
            // 'remember_token	' => null,
            'created_at' => '2017-11-13 11:16:20',
            'updated_at' => '2017-11-13 11:16:20',
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
        Schema::dropIfExists('users');
    }
}
