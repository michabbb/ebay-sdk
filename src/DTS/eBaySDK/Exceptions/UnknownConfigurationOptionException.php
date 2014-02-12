<?php
namespace DTS\eBaySDK\Exceptions;

class UnknownConfigurationOptionException extends \LogicException
{
    public function __construct($class, $property, $code = 0, \Exception $previous = null)
    {
        parent::__construct("Unknown configuration option: $class::$property", $code, $previous);
    }
}
