<?php

namespace Nyaxk\CapmonsterCloudClient\Captcha;

use Nyaxk\CapmonsterCloudClient\CaptchaRequest;

class Turnstile extends CaptchaRequest
{

    public function __construct(
        $websiteURL,
        $websiteKey,
        $proxyType = null,
        $proxyAddress = null,
        $proxyPort = null,
        $proxyLogin = null,
        $proxyPassword = null,
        $cloudflareTaskType = null,
        $htmlPageBase64 = null,
        $userAgent = null,
        $pageAction = null,
        $data = null,
        $pageData = null
    ) {
        $options = $this->clearInput([
            "websiteURL" => $websiteURL,
            "websiteKey" => $websiteKey,
            "proxyType" => $proxyType,
            "proxyAddress" => $proxyAddress,
            "proxyPort" => $proxyPort,
            "proxyLogin" => $proxyLogin,
            "proxyPassword" => $proxyPassword,
            "cloudflareTaskType" => $cloudflareTaskType,
            "htmlPageBase64" => $htmlPageBase64,
            "userAgent" => $userAgent,
            "pageAction" => $pageAction,
            "data" => $data,
            "pageData" => $pageData
        ]);

        CaptchaRequest::__construct($this->detectProxy($options, "TurnstileTask", "TurnstileTaskProxyless"), $options);
    }
}
