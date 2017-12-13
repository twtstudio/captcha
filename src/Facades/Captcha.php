<?php

namespace TwT\Captcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TwT\Captcha
 */
class Captcha extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor() { return 'captcha'; }

}
