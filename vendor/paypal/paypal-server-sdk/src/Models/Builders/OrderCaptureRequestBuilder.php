<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\OrderCaptureRequest;
use PaypalServerSdkLib\Models\OrderCaptureRequestPaymentSource;

/**
 * Builder for model OrderCaptureRequest
 *
 * @see OrderCaptureRequest
 */
class OrderCaptureRequestBuilder
{
    /**
     * @var OrderCaptureRequest
     */
    private $instance;

    private function __construct(OrderCaptureRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new order capture request Builder object.
     */
    public static function init(): self
    {
        return new self(new OrderCaptureRequest());
    }

    /**
     * Sets payment source field.
     */
    public function paymentSource(?OrderCaptureRequestPaymentSource $value): self
    {
        $this->instance->setPaymentSource($value);
        return $this;
    }

    /**
     * Initializes a new order capture request object.
     */
    public function build(): OrderCaptureRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
