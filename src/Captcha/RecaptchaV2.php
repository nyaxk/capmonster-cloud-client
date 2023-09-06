<?php

namespace Lun324\CapmonsterCloudClient\Captcha;

use Lun324\CapmonsterCloudClient\CaptchaRequest;

class RecaptchaV2 extends CaptchaRequest
{

    public function __construct(
        $websiteURL,
        $websiteKey,
        $recaptchaDataSValue = null,
        $userAgent = null,
        $cookies = null,
        $proxyType = null,
        $proxyAddress = null,
        $proxyPort = null,
        $proxyLogin = null,
        $proxyPassword = null
    )
    {
        $options = $this->clearInput([
            "websiteURL" => $websiteURL,
            "websiteKey" => $websiteKey,
            "proxyType" => $proxyType,
            "proxyAddress" => $proxyAddress,
            "proxyPort" => $proxyPort,
            "proxyLogin" => $proxyLogin,
            "proxyPassword" => $proxyPassword,
            "recaptchaDataSValue" => $recaptchaDataSValue,
            "userAgent" => $userAgent,
            "cookies" => $cookies
        ]);
        CaptchaRequest::__construct($this->detectProxy($options, "NoCaptchaTask", "NoCaptchaTaskProxyless"), $options);
    }

}