<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('message');
            $table->boolean('status');
            $table->integer('from_id');
            $table->integer('user_id');
            $table->timestamps();
        });

        DB::table('messages')->insert([
          [
            'title' => 'welkome',
            'message' => 'welkome to this application',
            'status' => '1',
            'from_id' => '2',
            'user_id' => '1',
            'created_at' => '2017-11-13 11:16:20',
            'updated_at' => '2017-11-13 11:16:20',
          ],
          [
            'title' => 'welkome',
            'message' => 'welkome to this application',
            'status' => '1',
            'from_id' => '1',
            'user_id' => '2',
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
        Schema::dropIfExists('messages');
    }
}
