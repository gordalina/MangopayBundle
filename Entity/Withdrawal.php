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

use Gordalina\Mangopay\Model\Withdrawal as WithdrawalModel;

/**
 * @ORM\Table(name="mangopay_withdrawal")
 * @ORM\Entity
 */
class Withdrawal extends WithdrawalModel
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
     * @ORM\Column(name="user_id", type="integer")
     *
     * @var integer
     */
    protected $UserID;

    /**
     * @ORM\Column(name="wallet_id", type="integer")
     *
     * @var integer
     */
    protected $WalletID;

    /**
     * @ORM\Column(name="amount", type="integer")
     *
     * @var integer
     */
    protected $Amount;

    /**
     * @ORM\Column(name="amount_without_fees", type="integer", nullable=true)
     *
     * @var integer
     */
    protected $AmountWithoutFees;

    /**
     * @ORM\Column(name="client_fee_amount", type="integer", nullable=true)
     *
     * @var integer
     */
    protected $ClientFeeAmount;

    /**
     * @ORM\Column(name="leetchi_fee_amount", type="integer", nullable=true)
     *
     * @var integer
     */
    protected $LeetchiFeeAmount;

    /**
     * @ORM\Column(name="is_completed", type="boolean")
     *
     * @var boolean
     */
    protected $IsCompleted;

    /**
     * @ORM\Column(name="is_succeeded", type="boolean")
     *
     * @var boolean
     */
    protected $IsSucceeded;

    /**
     * @ORM\Column(name="beneficiary_id", type="integer")
     *
     * @var integer
     */
    protected $BeneficiaryID;

    /**
     * @ORM\Column(name="error", type="object", nullable=true)
     *
     * @var object
     */
    protected $Error;
}
