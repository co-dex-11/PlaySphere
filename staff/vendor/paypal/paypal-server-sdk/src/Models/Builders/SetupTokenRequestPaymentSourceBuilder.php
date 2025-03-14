<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\SetupTokenRequestCard;
use PaypalServerSdkLib\Models\SetupTokenRequestPaymentSource;
use PaypalServerSdkLib\Models\VaultPaypalWalletRequest;
use PaypalServerSdkLib\Models\VaultTokenRequest;
use PaypalServerSdkLib\Models\VaultVenmoRequest;

/**
 * Builder for model SetupTokenRequestPaymentSource
 *
 * @see SetupTokenRequestPaymentSource
 */
class SetupTokenRequestPaymentSourceBuilder
{
    /**
     * @var SetupTokenRequestPaymentSource
     */
    private $instance;

    private function __construct(SetupTokenRequestPaymentSource $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new setup token request payment source Builder object.
     */
    public static function init(): self
    {
        return new self(new SetupTokenRequestPaymentSource());
    }

    /**
     * Sets card field.
     */
    public function card(?SetupTokenRequestCard $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Sets paypal field.
     */
    public function paypal(?VaultPaypalWalletRequest $value): self
    {
        $this->instance->setPaypal($value);
        return $this;
    }

    /**
     * Sets venmo field.
     */
    public function venmo(?VaultVenmoRequest $value): self
    {
        $this->instance->setVenmo($value);
        return $this;
    }

    /**
     * Sets token field.
     */
    public function token(?VaultTokenRequest $value): self
    {
        $this->instance->setToken($value);
        return $this;
    }

    /**
     * Initializes a new setup token request payment source object.
     */
    public function build(): SetupTokenRequestPaymentSource
    {
        return CoreHelper::clone($this->instance);
    }
}
