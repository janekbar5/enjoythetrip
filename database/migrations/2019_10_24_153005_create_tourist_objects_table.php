<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTouristObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourist_objects', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');			
			$table->integer('city_id')->unsigned();
			$table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            
        });

        $faker = Faker\Factory::create();
        /* Lecture 10 */
        for ($i = 1; $i <= 10; $i++)
        {

            DB::table('tourist_objects')->insert([
                
                'name' => $faker->unique()->word,
                'description' => $faker->text(1000),
                'city_id' => $faker->numberBetween(1,10),
                'user_id' => $faker->numberBetween(1,10),
                
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourist_objects');
    }
}
