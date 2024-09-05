<?php

namespace Nyaxk\CapmonsterCloudClient\Captcha;

use Nyaxk\CapmonsterCloudClient\CaptchaRequest;

class ComplexImage extends CaptchaRequest
{
    public function __construct(
        $class,
        $metadata,
        $imageUrls = [],
        $imagesBase64 = [],
        $userAgent = null,
        $websiteURL = null
    ) {
        $options = $this->clearInput([
            "class" => $class,
            "imageUrls" => $imageUrls,
            "imagesBase64" => $imagesBase64,
            "metadata" => $metadata,
            "userAgent" => $userAgent,
            "websiteURL" => $websiteURL,
        ]);
        CaptchaRequest::__construct('ComplexImageTask', $options);
    }
}
