<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1bae9e80265f85709f7235955fd3024a
{
    public static $files = array (
        '6124b4c8570aa390c21fafd04a26c69f' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/deep_copy.php',
        '65966401fe9011225a1878c3ea034262' => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Utilities.php',
        'db356362850385d08a5381de2638b5fd' => __DIR__ . '/..' . '/mpdf/mpdf/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'setasign\\Fpdi\\' => 14,
        ),
        'a' => 
        array (
            'apimatic\\jsonmapper\\' => 20,
        ),
        'U' => 
        array (
            'Unirest\\' => 8,
        ),
        'S' => 
        array (
            'Stripe\\' => 7,
            'Sample\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'PaypalServerSdkLib\\' => 19,
            'PayPalHttp\\' => 11,
            'PayPalCheckoutSdk\\' => 18,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'Mpdf\\PsrLogAwareTrait\\' => 22,
            'Mpdf\\PsrHttpMessageShim\\' => 24,
            'Mpdf\\' => 5,
        ),
        'I' => 
        array (
            'Instamojo\\Exceptions\\' => 21,
            'Instamojo\\' => 10,
        ),
        'D' => 
        array (
            'DeepCopy\\' => 9,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'CoreInterfaces\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'setasign\\Fpdi\\' => 
        array (
            0 => __DIR__ . '/..' . '/setasign/fpdi/src',
        ),
        'apimatic\\jsonmapper\\' => 
        array (
            0 => __DIR__ . '/..' . '/apimatic/jsonmapper/src',
        ),
        'Unirest\\' => 
        array (
            0 => __DIR__ . '/..' . '/apimatic/unirest-php/src',
        ),
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
        'Sample\\' => 
        array (
            0 => __DIR__ . '/..' . '/paypal/paypal-checkout-sdk/samples',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'PaypalServerSdkLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/paypal/paypal-server-sdk/src',
        ),
        'PayPalHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/paypal/paypalhttp/lib/PayPalHttp',
        ),
        'PayPalCheckoutSdk\\' => 
        array (
            0 => __DIR__ . '/..' . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Mpdf\\PsrLogAwareTrait\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/psr-log-aware-trait/src',
        ),
        'Mpdf\\PsrHttpMessageShim\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/psr-http-message-shim/src',
        ),
        'Mpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/mpdf/src',
        ),
        'Instamojo\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Exceptions',
        ),
        'Instamojo\\' => 
        array (
            0 => __DIR__ . '/..' . '/instamojo/instamojo-php/src',
        ),
        'DeepCopy\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/apimatic/core/src',
        ),
        'CoreInterfaces\\' => 
        array (
            0 => __DIR__ . '/..' . '/apimatic/core-interfaces/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rs\\Json' => 
            array (
                0 => __DIR__ . '/..' . '/php-jsonpointer/php-jsonpointer/src',
            ),
        ),
        'P' => 
        array (
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Instamojo\\Exception\\InvalidRequestException' => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Exceptions/InvalidRequestException.php',
        'Instamojo\\Exceptions\\ActionForbiddenException' => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Exceptions/ActionForbiddenException.php',
        'Instamojo\\Exceptions\\ApiException' => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Exceptions/ApiException.php',
        'Instamojo\\Exceptions\\AuthenticationException' => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Exceptions/AuthenticationException.php',
        'Instamojo\\Exceptions\\InstamojoException' => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Exceptions/InstamojoException.php',
        'Instamojo\\Exceptions\\MissingParameterException' => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Exceptions/MissingParameterException.php',
        'Instamojo\\Instamojo' => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Instamojo.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1bae9e80265f85709f7235955fd3024a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1bae9e80265f85709f7235955fd3024a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1bae9e80265f85709f7235955fd3024a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1bae9e80265f85709f7235955fd3024a::$classMap;

        }, null, ClassLoader::class);
    }
}
