<?php

use Illuminate\Support\Facades\Http;
use SpaceTraders\SpaceTraders;

const API_KEY = 'e2d363b3-a2ab-4c7f-a698-f736d9781080';

it('can instantiate the class', function () {
    expect(new SpaceTraders(API_KEY))->toBeInstanceOf(SpaceTraders::class);
});


it('can display account information', function () {
    $spaceTraders = new SpaceTraders(API_KEY);
    $response = $spaceTraders->account();

    expect($response)
        ->toBe([
            "user" => [
                "username" => "gastlyguy2",
                "shipCount" => 0,
                "structureCount" => 0,
                "joinedAt" => "2021-11-18T19:29:35.607Z",
                "credits" => 0
            ]
        ]);
});
