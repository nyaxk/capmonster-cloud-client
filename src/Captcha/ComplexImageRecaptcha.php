<?php

namespace Nyaxk\CapmonsterCloudClient\Captcha;

class ComplexImageRecaptcha extends ComplexImage
{
    public $class = 'recaptcha';

    public function __construct(
        array  $metadata,
        array  $imageUrls = [],
        array  $imagesBase64 = [],
        string $userAgent = null,
        string $websiteURL = null
    ) {
        parent::__construct($this->class, $metadata, $imageUrls, $imagesBase64, $userAgent, $websiteURL);
    }
}
