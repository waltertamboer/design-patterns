<?php
/**
 * Design Patterns (http://framework.zend.com/)
 *
 * @link http://github.com/WalterTamboer/design-patterns for the canonical source repository
 * @copyright Copyright (c) 2014 Walter Tamboer. (http://www.waltertamboer.nl)
 */

namespace DesignPatterns;

class ConcreteElement implements ElementInterface
{
    public function accept(VisitorInterface $visitor)
    {
        $visitor->visit($this);
    }
}
