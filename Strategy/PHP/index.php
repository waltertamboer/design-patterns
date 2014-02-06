<?php
/**
 * Design Patterns (http://framework.zend.com/)
 *
 * @link http://github.com/WalterTamboer/design-patterns for the canonical source repository
 * @copyright Copyright (c) 2014 Walter Tamboer. (http://www.waltertamboer.nl)
 */

namespace DesignPatterns;

$context = new Context(new AddStrategy());
$context->execute(10, 20);

$context = new Context(new SubtractStrategy());
$context->execute(10, 20);
