<?php
/**
 * Design Patterns (http://framework.zend.com/)
 *
 * @link http://github.com/WalterTamboer/design-patterns for the canonical source repository
 * @copyright Copyright (c) 2014 Walter Tamboer. (http://www.waltertamboer.nl)
 */

namespace DesignPatterns;

/**
 * An example of a Singleton design pattern.
 */
class Singleton
{
    /**
     * A static variable that holds the instance of this class.
     *
     * @var Singleton
     */
    private static $instance;

    /**
     * A private constructor to prevent instantiation
     */
    private function __construct()
    {
    }

    /**
     * Make clone function private as well to prevent cloning.
     */
    private function __clone()
    {
    }

    /**
     * The same goes for the wakeup function, this prevents unserializing.
     */
    private function __wakeup()
    {
    }

    /**
     * Gets the instance of this Singleton class.
     *
     * @return Singleton
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
