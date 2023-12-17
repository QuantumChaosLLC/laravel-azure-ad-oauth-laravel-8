<?php

namespace quantumchaos\AzureSocialite;

use Illuminate\Support\Facades\Facade;

class AzureUserFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'azure-user';
    }
}
