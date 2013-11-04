<?php

/*
 * This file is part of the mangopay package.
 *
 * (c) Samuel Gordalina <https://github.com/gordalina/mangopay>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gordalina\Bundle\MangopayBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Gordalina\Mangopay\Model\Wallet as WalletModel;

/**
 * @ORM\Table(name="mangopay_wallet")
 * @ORM\Entity
 */
class Wallet extends WalletModel
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="NONE")
     *
     * @var integer
     */
    protected $ID;

    /**
     * @ORM\Column(name="tag", type="string", nullable=true)
     *
     * @var string
     */
    protected $Tag;

    /**
     * @ORM\Column(name="creation_date", type="datetime")
     *
     * @var \DateTime
     */
    protected $CreationDate;

    /**
     * @ORM\Column(name="update_date", type="datetime")
     *
     * @var \DateTime
     */
    protected $UpdateDate;

    /**
     * @ORM\Column(name="owners", type="array")
     *
     * @var array
     */
    protected $Owners;

    /**
     * @ORM\Column(name="name", type="string", nullable=true)
     *
     * @var string
     */
    protected $Name;

    /**
     * @ORM\Column(name="description", type="string", nullable=true)
     *
     * @var string
     */
    protected $Description;

    /**
     * @ORM\Column(name="raising_goal_amount", type="integer", nullable=true)
     *
     * @var integer
     */
    protected $RaisingGoalAmount;

    /**
     * @ORM\Column(name="collected_amount", type="integer")
     *
     * @var integer
     */
    protected $CollectedAmount;

    /**
     * @ORM\Column(name="spent_amount", type="integer")
     *
     * @var integer
     */
    protected $SpentAmount;

    /**
     * @ORM\Column(name="amount", type="integer")
     *
     * @var integer
     */
    protected $Amount;

    /**
     * @ORM\Column(name="contribution_limit_date", type="datetime", nullable=true)
     *
     * @var \DateTime
     */
    protected $ContributionLimitDate;

    /**
     * @ORM\Column(name="is_closed", type="boolean")
     *
     * @var boolean
     */
    protected $IsClosed;
}
