<?php
/**
 * Design Patterns (http://framework.zend.com/)
 *
 * @link http://github.com/WalterTamboer/design-patterns for the canonical source repository
 * @copyright Copyright (c) 2014 Walter Tamboer. (http://www.waltertamboer.nl)
 */

namespace DesignPatterns;

/**
 * A proxy for the DataObject.
 */
class DataObjectProxy extends DataObject
{
    /**
     * Whether or not the data is dirty.
     *
     * @var bool
     */
    private $isDirty;

    /**
     * Initializes a new instance of this class.
     *
     * @param string $data The data to set.
     */
    public function __construct($data)
    {
        parent::__construct($data);

        $this->isDirty = false;
    }

    /**
     * Sets the data variable.
     *
     * @param string $data The data to set.
     */
    public function setData($data)
    {
        parent::setData($data);

        $this->isDirty = true;
    }
}
