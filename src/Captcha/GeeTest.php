<?php

namespace Lun324\CapmonsterCloudClient\Captcha;

use Lun324\CapmonsterCloudClient\CaptchaRequest;

class GeeTest extends CaptchaRequest
{

    public function __construct(
        $websiteURL,
        $gt,
        $challenge = null,
        $geetestApiServerSubdomain = null,
        $geetestGetLib = null,
        $version = 3,
        $initParameters = [],
        $userAgent = null,
        $proxyType = null,
        $proxyAddress = null,
        $proxyPort = null,
        $proxyLogin = null,
        $proxyPassword = null
    )
    {
        $options = $this->clearInput([
            "websiteURL" => $websiteURL,
            "gt" => $gt,
            "challenge" => $challenge,
            "geetestApiServerSubdomain" => $geetestApiServerSubdomain,
            "geetestGetLib" => $geetestGetLib,
            "version" => $version,
            "initParameters" => $initParameters,
            "userAgent" => $userAgent,
            "proxyType" => $proxyType,
            "proxyAddress" => $proxyAddress,
            "proxyPort" => $proxyPort,
            "proxyLogin" => $proxyLogin,
            "proxyPassword" => $proxyPassword,
        ]);
        CaptchaRequest::__construct($this->detectProxy($options, "GeeTestTask", "GeeTestTaskProxyless"), $options);
    }

}
