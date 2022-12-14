<?php

use Illuminate\Database\Seeder;
use App\Test;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

//
use Faker\Generator;
use Illuminate\Container\Container;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $obj;

    public function run()
    {
//        factory(Test::class, 10)->create();

// create model factory
// php artisan make:factory TestFactory --model=Test
//inside factory
//
//$factory->define(Post::class, function (Faker $faker) {
//    return [
//        'title' => $faker->sentence(3, true),
//        'content' => $faker->sentence(5, true),
//    ];
//});
/// //

//        User::create([
//            'name' => 'Hardik',
//            'email' => 'admin@gmail.com',
//            'password' => bcrypt('123456'),
//        ]);

//        DB::table('users')->insert([
//            'name' => 'Hardik',
//            'email' => 'admin@gmail.com',
//            'password' => bcrypt('123456'),
//        ]);

        $faker = Container::getInstance()->make(Generator::class);

        for($i=0;$i<=7;$i++){
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('123456'),
            ]);
        }


    }
}
