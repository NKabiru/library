<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function signIn($user = null)
    {
        $signedInUser = $user ?? factory('App\User')->create();

        $this->actingAs($signedInUser);

        return $this;
    }
}
