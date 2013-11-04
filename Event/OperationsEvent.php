<?php

/*
 * This file is part of the MangopayBundle package.
 *
 * (c) Samuel Gordalina <https://github.com/gordalina/mangopay-bundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gordalina\Bundle\MangopayBundle\Event;

use Symfony\Component\EventDispatcher\Event;

use Gordalina\Mangopay\Model\Operations;

class OperationsEvent extends Event
{
    /**
     * @var Operations
     */
    protected $operations;

    /**
     * @param Operations $operations
     */
    public function __construct(Operations $operations)
    {
        $this->operations = $operations;
    }

    /**
     * @return Operations
     */
    public function getOperations()
    {
        return $this->operations;
    }
}
