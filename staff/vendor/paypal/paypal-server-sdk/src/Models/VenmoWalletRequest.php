<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

use stdClass;

/**
 * Information needed to pay using Venmo.
 */
class VenmoWalletRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $vaultId;

    /**
     * @var string|null
     */
    private $emailAddress;

    /**
     * @var VenmoWalletExperienceContext|null
     */
    private $experienceContext;

    /**
     * @var VenmoWalletAdditionalAttributes|null
     */
    private $attributes;

    /**
     * Returns Vault Id.
     * The PayPal-generated ID for the vaulted payment source. This ID should be stored on the merchant's
     * server so the saved payment source can be used for future transactions.
     */
    public function getVaultId(): ?string
    {
        return $this->vaultId;
    }

    /**
     * Sets Vault Id.
     * The PayPal-generated ID for the vaulted payment source. This ID should be stored on the merchant's
     * server so the saved payment source can be used for future transactions.
     *
     * @maps vault_id
     */
    public function setVaultId(?string $vaultId): void
    {
        $this->vaultId = $vaultId;
    }

    /**
     * Returns Email Address.
     * The internationalized email address.<blockquote><strong>Note:</strong> Up to 64 characters are
     * allowed before and 255 characters are allowed after the <code>@</code> sign. However, the generally
     * accepted maximum length for an email address is 254 characters. The pattern verifies that an
     * unquoted <code>@</code> sign exists.</blockquote>
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    /**
     * Sets Email Address.
     * The internationalized email address.<blockquote><strong>Note:</strong> Up to 64 characters are
     * allowed before and 255 characters are allowed after the <code>@</code> sign. However, the generally
     * accepted maximum length for an email address is 254 characters. The pattern verifies that an
     * unquoted <code>@</code> sign exists.</blockquote>
     *
     * @maps email_address
     */
    public function setEmailAddress(?string $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * Returns Experience Context.
     * Customizes the buyer experience during the approval process for payment with Venmo.
     * <blockquote><strong>Note:</strong> Partners and Marketplaces might configure
     * <code>shipping_preference</code> during partner account setup, which overrides the request values.
     * </blockquote>
     */
    public function getExperienceContext(): ?VenmoWalletExperienceContext
    {
        return $this->experienceContext;
    }

    /**
     * Sets Experience Context.
     * Customizes the buyer experience during the approval process for payment with Venmo.
     * <blockquote><strong>Note:</strong> Partners and Marketplaces might configure
     * <code>shipping_preference</code> during partner account setup, which overrides the request values.
     * </blockquote>
     *
     * @maps experience_context
     */
    public function setExperienceContext(?VenmoWalletExperienceContext $experienceContext): void
    {
        $this->experienceContext = $experienceContext;
    }

    /**
     * Returns Attributes.
     * Additional attributes associated with the use of this Venmo Wallet.
     */
    public function getAttributes(): ?VenmoWalletAdditionalAttributes
    {
        return $this->attributes;
    }

    /**
     * Sets Attributes.
     * Additional attributes associated with the use of this Venmo Wallet.
     *
     * @maps attributes
     */
    public function setAttributes(?VenmoWalletAdditionalAttributes $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->vaultId)) {
            $json['vault_id']           = $this->vaultId;
        }
        if (isset($this->emailAddress)) {
            $json['email_address']      = $this->emailAddress;
        }
        if (isset($this->experienceContext)) {
            $json['experience_context'] = $this->experienceContext;
        }
        if (isset($this->attributes)) {
            $json['attributes']         = $this->attributes;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
