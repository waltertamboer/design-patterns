<?php
/**
 * Design Patterns (http://framework.zend.com/)
 *
 * @link http://github.com/WalterTamboer/design-patterns for the canonical source repository
 * @copyright Copyright (c) 2014 Walter Tamboer. (http://www.waltertamboer.nl)
 */

namespace DesignPatterns;

interface StrategyInterface
{
    /**
     * Executes the strategy based on the two given parameters.
     *
     * @param int $lft The left value.
     * @param int $rgt The right value.
     */
    public function execute($a, $b);
}
