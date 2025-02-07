<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: innertube/request/browse_request_params.proto

namespace Com\Youtube\Innertube\Request\BrowseRequestParams;

use UnexpectedValueException;

/**
 * Protobuf type <code>com.youtube.innertube.request.BrowseRequestParams.Sort</code>
 */
class Sort
{
    /**
     * Generated from protobuf enum <code>DEFAULT_SORT = 0;</code>
     */
    const DEFAULT_SORT = 0;
    /**
     * Generated from protobuf enum <code>MOST_POPULAR = 1;</code>
     */
    const MOST_POPULAR = 1;
    /**
     * Generated from protobuf enum <code>OLDEST = 2;</code>
     */
    const OLDEST = 2;
    /**
     * Generated from protobuf enum <code>NEWEST = 3;</code>
     */
    const NEWEST = 3;
    /**
     * Generated from protobuf enum <code>LATEST = 4;</code>
     */
    const LATEST = 4;

    private static $valueToName = [
        self::DEFAULT_SORT => 'DEFAULT_SORT',
        self::MOST_POPULAR => 'MOST_POPULAR',
        self::OLDEST => 'OLDEST',
        self::NEWEST => 'NEWEST',
        self::LATEST => 'LATEST',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Sort::class, \Com\Youtube\Innertube\Request\BrowseRequestParams_Sort::class);

