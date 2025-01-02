<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\AuthorizationStatusDetails;
use PaypalServerSdkLib\Models\AuthorizationWithAdditionalData;
use PaypalServerSdkLib\Models\Money;
use PaypalServerSdkLib\Models\NetworkTransactionReference;
use PaypalServerSdkLib\Models\ProcessorResponse;
use PaypalServerSdkLib\Models\SellerProtection;

/**
 * Builder for model AuthorizationWithAdditionalData
 *
 * @see AuthorizationWithAdditionalData
 */
class AuthorizationWithAdditionalDataBuilder
{
    /**
     * @var AuthorizationWithAdditionalData
     */
    private $instance;

    private function __construct(AuthorizationWithAdditionalData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new authorization with additional data Builder object.
     */
    public static function init(): self
    {
        return new self(new AuthorizationWithAdditionalData());
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets status details field.
     */
    public function statusDetails(?AuthorizationStatusDetails $value): self
    {
        $this->instance->setStatusDetails($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets amount field.
     */
    public function amount(?Money $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets invoice id field.
     */
    public function invoiceId(?string $value): self
    {
        $this->instance->setInvoiceId($value);
        return $this;
    }

    /**
     * Sets custom id field.
     */
    public function customId(?string $value): self
    {
        $this->instance->setCustomId($value);
        return $this;
    }

    /**
     * Sets network transaction reference field.
     */
    public function networkTransactionReference(?NetworkTransactionReference $value): self
    {
        $this->instance->setNetworkTransactionReference($value);
        return $this;
    }

    /**
     * Sets seller protection field.
     */
    public function sellerProtection(?SellerProtection $value): self
    {
        $this->instance->setSellerProtection($value);
        return $this;
    }

    /**
     * Sets expiration time field.
     */
    public function expirationTime(?string $value): self
    {
        $this->instance->setExpirationTime($value);
        return $this;
    }

    /**
     * Sets links field.
     */
    public function links(?array $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Sets create time field.
     */
    public function createTime(?string $value): self
    {
        $this->instance->setCreateTime($value);
        return $this;
    }

    /**
     * Sets update time field.
     */
    public function updateTime(?string $value): self
    {
        $this->instance->setUpdateTime($value);
        return $this;
    }

    /**
     * Sets processor response field.
     */
    public function processorResponse(?ProcessorResponse $value): self
    {
        $this->instance->setProcessorResponse($value);
        return $this;
    }

    /**
     * Initializes a new authorization with additional data object.
     */
    public function build(): AuthorizationWithAdditionalData
    {
        return CoreHelper::clone($this->instance);
    }
}
