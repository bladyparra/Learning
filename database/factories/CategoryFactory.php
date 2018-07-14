<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement(['PHP', 'JAVASCRIPT', 'JAVA', 'DISEÑO WEB', 'SERVIDORES', 'MYSQL', 'BIGDATA', 'AMAZON WEB SERVICES']),
        'description' =>$faker->sentence
    ];
});
