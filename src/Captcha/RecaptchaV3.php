<?php

namespace Nyaxk\CapmonsterCloudClient\Captcha;

use Nyaxk\CapmonsterCloudClient\CaptchaRequest;

class RecaptchaV3 extends CaptchaRequest
{

    public function __construct($websiteURL, $websiteKey, $minScore = null, $pageAction = null)
    {
        $options = [
            "websiteURL" => $websiteURL,
            "websiteKey" => $websiteKey,
            "minScore" => $minScore,
            "pageAction" => $pageAction
        ];
        CaptchaRequest::__construct("RecaptchaV3TaskProxyless", $options);
    }
}
