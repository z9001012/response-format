<?php
namespace Zone\ResponseFormat\Facades;

use Illuminate\Support\Facades\Facade;

class ResponseFormat extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zone-response-format';
    }
}