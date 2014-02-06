<?php
/**
 * Design Patterns (http://framework.zend.com/)
 *
 * @link http://github.com/WalterTamboer/design-patterns for the canonical source repository
 * @copyright Copyright (c) 2014 Walter Tamboer. (http://www.waltertamboer.nl)
 */

namespace DesignPatterns;

/**
 * A data object.
 */
class DataObject
{
    /**
     * A data variable.
     *
     * @var string
     */
    private $data;

    /**
     * Initializes a new instance of this class.
     *
     * @param string $data The data to set.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Gets the data variable.
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets the data variable.
     *
     * @param string $data The data to set.
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}
