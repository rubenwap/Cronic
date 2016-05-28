<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
      $table->increments('id');
			$table->timestamp('birth');
        $table->integer('user_id')->unsigned();

	$table->timestamps();
			$table->integer('height');
      $table->integer('weight');
        $table->text('allergies');
      	$table->text('illness');
      $table->text('doctor');

   
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('settings');
    }
}
