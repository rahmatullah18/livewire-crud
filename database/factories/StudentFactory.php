<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'nim' => $faker->randomDigit,
        'jurusan' => 'informatika',
    ];
});
