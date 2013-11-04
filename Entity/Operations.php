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

use Gordalina\Mangopay\Model\Operations as OperationsModel;

/**
 * @ORM\Table(name="mangopay_operations")
 * @ORM\Entity
 */
class Operations extends OperationsModel
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
     * @ORM\Column(name="transaction_type", type="string")
     *
     * @var string
     */
    protected $TransactionType;

    /**
     * @ORM\Column(name="transaction_id", type="integer")
     *
     * @var integer
     */
    protected $TransactionID;

    /**
     * @ORM\Column(name="leetchi_fee_amount", type="integer")
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
     * @ORM\Column(name="error", type="object")
     *
     * @var object
     */
    protected $Error;
}
