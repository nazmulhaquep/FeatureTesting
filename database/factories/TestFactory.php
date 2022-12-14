<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\Test;
//use Faker\Generator as Faker;
//
//$factory->define(Model::class, function (Faker $faker) {
//    return [
//        'name'=>$faker->name,
//        'mobile_no'=>111,
//        'address'=>$faker->address
//    ];
//});

use App\Test;
use Faker\Generator as Faker;

$factory->define(Test::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'mobile_no' =>999,
        'address' => $faker->address,
    ];
});
