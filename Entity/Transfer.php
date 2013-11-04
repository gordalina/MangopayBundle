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

use Gordalina\Mangopay\Model\Transfer as TransferModel;

/**
 * @ORM\Table(name="mangopay_transfer")
 * @ORM\Entity
 */
class Transfer extends TransferModel
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
     * @ORM\Column(name="payer_id", type="integer")
     *
     * @var integer
     */
    protected $PayerID;

    /**
     * @ORM\Column(name="beneficiary_id", type="integer")
     *
     * @var integer
     */
    protected $BeneficiaryID;

    /**
     * @ORM\Column(name="amount", type="integer")
     *
     * @var integer
     */
    protected $Amount;

    /**
     * @ORM\Column(name="client_fee_amount", type="integer", nullable=true)
     *
     * @var integer
     */
    protected $ClientFeeAmount;

    /**
     * @ORM\Column(name="payer_wallet_id", type="integer", nullable=true)
     *
     * @var integer
     */
    protected $PayerWalletID;

    /**
     * @ORM\Column(name="beneficiary_wallet_id", type="integer", nullable=true)
     *
     * @var integer
     */
    protected $BeneficiaryWalletID;
}
