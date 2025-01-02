<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\ExchangeRate;

/**
 * Builder for model ExchangeRate
 *
 * @see ExchangeRate
 */
class ExchangeRateBuilder
{
    /**
     * @var ExchangeRate
     */
    private $instance;

    private function __construct(ExchangeRate $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new exchange rate Builder object.
     */
    public static function init(): self
    {
        return new self(new ExchangeRate());
    }

    /**
     * Sets source currency field.
     */
    public function sourceCurrency(?string $value): self
    {
        $this->instance->setSourceCurrency($value);
        return $this;
    }

    /**
     * Sets target currency field.
     */
    public function targetCurrency(?string $value): self
    {
        $this->instance->setTargetCurrency($value);
        return $this;
    }

    /**
     * Sets value field.
     */
    public function value(?string $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Initializes a new exchange rate object.
     */
    public function build(): ExchangeRate
    {
        return CoreHelper::clone($this->instance);
    }
}
