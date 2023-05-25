<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function getPackageProviders($app): array
    {
        return [
            \Spatie\LaravelRay\RayServiceProvider::class,
        ];
    }
}
