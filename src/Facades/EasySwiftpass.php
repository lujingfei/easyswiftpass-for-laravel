<?php
namespace Geoff\EasySwiftpass\Facades;

use Illuminate\Support\Facades\Facade;

class EasySwiftpass extends Facade{
    protected static function getFacadeAccessor()
    {
        return 'easyswiftpass';
    }
}