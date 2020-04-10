<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Property::class, function (Faker $faker) {


    return [
        'user_id' => 1,
        'llojishpalljes' => 'Truall',
        'numri_parceles' => 2,
        'zona_kadastrale' => 1,
        'lloji' => 'Me qera',
        'komuna' => 'vushtrri',
        'numri_dhomave' => 1,
        'adresa' => 'fush kosov',
        'ngrohja' => 'po',
        'numri_banjove' => 2,
        'siperfaqja' => '400',
        'numri_tel' => $faker->phoneNumber,
        'foto' => null,
        'kati' => 2 ,
        'aprovimi' => 0,
        'komenti' => $faker->sentence,
        'qmimi' => 2,
    ];
});
