<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * The operation.
 */
class PatchOp
{
    public const ADD = 'add';

    public const REMOVE = 'remove';

    public const REPLACE = 'replace';

    public const MOVE = 'move';

    public const COPY = 'copy';

    public const TEST = 'test';

    private const _ALL_VALUES = [self::ADD, self::REMOVE, self::REPLACE, self::MOVE, self::COPY, self::TEST];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for PatchOp.");
    }
}
