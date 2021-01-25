<?php

namespace Umobi\LaravelPinbank;

use Illuminate\Support\Facades\Facade;
use PinBank\PinBank;

/**
 * @see PinBank
 */
class LaravelPinbankFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-pinbank';
    }
}
