<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1bae9e80265f85709f7235955fd3024a
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'Minishlink\\WebPush\\' => 19,
        ),
        'J' => 
        array (
            'Jose\\Component\\Signature\\Algorithm\\' => 35,
            'Jose\\Component\\Signature\\' => 25,
            'Jose\\Component\\KeyManagement\\' => 29,
            'Jose\\Component\\Core\\Util\\Ecc\\' => 29,
            'Jose\\Component\\Core\\' => 20,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'F' => 
        array (
            'FG\\' => 3,
        ),
        'B' => 
        array (
            'Brick\\Math\\' => 11,
            'Base64Url\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Minishlink\\WebPush\\' => 
        array (
            0 => __DIR__ . '/..' . '/minishlink/web-push/src',
        ),
        'Jose\\Component\\Signature\\Algorithm\\' => 
        array (
            0 => __DIR__ . '/..' . '/web-token/jwt-signature-algorithm-ecdsa',
        ),
        'Jose\\Component\\Signature\\' => 
        array (
            0 => __DIR__ . '/..' . '/web-token/jwt-signature',
        ),
        'Jose\\Component\\KeyManagement\\' => 
        array (
            0 => __DIR__ . '/..' . '/web-token/jwt-key-mgmt',
        ),
        'Jose\\Component\\Core\\Util\\Ecc\\' => 
        array (
            0 => __DIR__ . '/..' . '/web-token/jwt-util-ecc',
        ),
        'Jose\\Component\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/web-token/jwt-core',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'FG\\' => 
        array (
            0 => __DIR__ . '/..' . '/fgrosse/phpasn1/lib',
        ),
        'Brick\\Math\\' => 
        array (
            0 => __DIR__ . '/..' . '/brick/math/src',
        ),
        'Base64Url\\' => 
        array (
            0 => __DIR__ . '/..' . '/spomky-labs/base64url/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1bae9e80265f85709f7235955fd3024a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1bae9e80265f85709f7235955fd3024a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1bae9e80265f85709f7235955fd3024a::$classMap;

        }, null, ClassLoader::class);
    }
}
