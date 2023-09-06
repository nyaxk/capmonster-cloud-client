<?php

namespace Lun324\CapmonsterCloudClient\Captcha;

use Lun324\CapmonsterCloudClient\CaptchaRequest;

class RecaptchaV2Enterprise extends CaptchaRequest
{

    public function __construct(
        $websiteURL,
        $websiteKey,
        $enterprisePayload = null,
        $apiDomain = null,
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
            "enterprisePayload" => $enterprisePayload,
            "apiDomain" => $apiDomain,
            "proxyType" => $proxyType,
            "proxyAddress" => $proxyAddress,
            "proxyPort" => $proxyPort,
            "proxyLogin" => $proxyLogin,
            "proxyPassword" => $proxyPassword,
            "userAgent" => $userAgent,
            "cookies" => $cookies
        ]);
        CaptchaRequest::__construct($this->detectProxy($options, "RecaptchaV2EnterpriseTask", "RecaptchaV2EnterpriseTaskProxyless"), $options);
    }

}