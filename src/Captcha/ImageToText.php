<?php

namespace Nyaxk\CapmonsterCloudClient\Captcha;

use Nyaxk\CapmonsterCloudClient\CaptchaRequest;

class ImageToText extends CaptchaRequest
{
    public function __construct(
        $body,
        $capMonsterModule = null,
        $recognizingThreshold = null,
        $case = null,
        $numeric = null,
        $math = null
    ) {
        $options = [
            "body" => $body,
            "CapMonsterModule" => $capMonsterModule,
            "recognizingThreshold" => $recognizingThreshold,
            "Case" => $case,
            "numeric" => $numeric,
            "math" => $math
        ];
        CaptchaRequest::__construct("ImageToTextTask", $options);
    }
}
