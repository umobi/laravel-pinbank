<?php

namespace Umobi\LaravelPinbank\Tests;

use Orchestra\Testbench\TestCase;
use PinBank\PinBank;
use Umobi\LaravelPinbank\LaravelPinbankFacade;
use Umobi\LaravelPinbank\LaravelPinbankServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelPinbankServiceProvider::class];
    }

    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);

        $app->useEnvironmentPath(dirname(dirname(__FILE__)));
        $app->loadEnvironmentFrom(".env.testing");
    }

    /** @test */
    public function true_is_true()
    {
        $client = app(PinBank::class);
        $this->assertInstanceOf(PinBank::class, $client);
    }
}
// #zqw$CXBky1Y*E1%BZo3
