<?php

namespace AmbroseTheBuild\GhanaPhoneNumberValidator\Facades;

use Illuminate\Support\Facades\Facade;

class GhanaPhoneNumberValidator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ghanaphonenumbervalidator';
    }
}
