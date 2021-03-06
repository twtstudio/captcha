<?php

namespace TwT\Captcha;

use Laravel\Lumen\Routing\Controller;

/**
 * Class CaptchaController
 * @package TwT\Captcha
 */
class LumenCaptchaController extends Controller
{

    /**
     * get CAPTCHA
     *
     * @param \TwT\Captcha\Captcha $captcha
     * @param string $key
     * @return \Intervention\Image\ImageManager->response
     */
    public function getCaptcha(Captcha $captcha, $key = 'default')
    {
        return $captcha->create($key);
    }

}
