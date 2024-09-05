<?php

namespace Nyaxk\CapmonsterCloudClient\Captcha;

class ComplexImageHCaptcha extends ComplexImage
{
    public $class = 'hcaptcha';

    public function __construct(
        array $metadata,
        array $imageUrls = [],
        array $imagesBase64 = [],
        string $userAgent = null,
        string $websiteURL = null
    ) {
        parent::__construct($this->class, $metadata, $imageUrls, $imagesBase64, $userAgent, $websiteURL);
    }
}
