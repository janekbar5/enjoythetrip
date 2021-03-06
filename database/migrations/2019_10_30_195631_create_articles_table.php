<?php
/*
|--------------------------------------------------------------------------
| database/migrations/2018_01_28_194759_create_articles_table.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('title'); /* Lecture 9 */
            $table->text('content'); /* Lecture 9 */
            $table->integer('user_id')->unsigned(); /* Lecture 9 */
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); /* Lecture 9 */
            $table->integer('object_id')->unsigned(); /* Lecture 9 */
            $table->foreign('object_id')->references('id')->on('tourist_objects')->onDelete('cascade'); /* Lecture 9 */
            $table->dateTime('created_at'); /* Lecture 9 */
        });
        $faker = Faker\Factory::create();

        /* Lecture 10 */
        for ($i = 1; $i <= 30; $i++) {

            DB::table('articles')->insert([
                'title' => $faker->text(20),
                'content' => $faker->text(1000),
                'created_at' => $faker->dateTime,
                'object_id' => $faker->numberBetween(1, 10),
                'user_id' => $faker->numberBetween(1, 10),
                
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
        Schema::dropIfExists('articles');
    }
}

