<?php

use MartijnD\SpaceTraders\SpaceTraders;

it('can instantiate the Facade', function () {
    expect(new SpaceTraders())->toBeInstanceOf(SpaceTraders::class);
});
