<?php

namespace Lun324\CapmonsterCloudClient\Captcha;

use Lun324\CapmonsterCloudClient\CaptchaRequest;

class FunCaptcha extends CaptchaRequest
{

    public function __construct(
        $websiteURL,
        $websitePublicKey,
        $userAgent,
        $funcaptchaApiJSSubdomain = null,
        $data = null,
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
            "websitePublicKey" => $websitePublicKey,
            "userAgent" => $userAgent,
            "funcaptchaApiJSSubdomain" => $funcaptchaApiJSSubdomain,
            "data" => $data,
            "cookies" => $cookies,
            "proxyType" => $proxyType,
            "proxyAddress" => $proxyAddress,
            "proxyPort" => $proxyPort,
            "proxyLogin" => $proxyLogin,
            "proxyPassword" => $proxyPassword,
        ]);
        CaptchaRequest::__construct($this->detectProxy($options, "FunCaptchaTask", "FunCaptchaTaskProxyless"), $options);
    }

}