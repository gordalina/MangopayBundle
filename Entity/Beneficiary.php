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

use Gordalina\Mangopay\Model\Beneficiary as BeneficiaryModel;

/**
 * @ORM\Table(name="mangopay_beneficiary")
 * @ORM\Entity
 */
class Beneficiary extends BeneficiaryModel
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
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     *
     * @var integer
     */
    protected $UserID;

    /**
     * @ORM\Column(name="bank_account_owner_name", type="string")
     *
     * @var string
     */
    protected $BankAccountOwnerName;

    /**
     * @ORM\Column(name="bank_account_owner_address", type="string")
     *
     * @var string
     */
    protected $BankAccountOwnerAddress;

    /**
     * @ORM\Column(name="bank_account_iban", type="string")
     *
     * @var string
     */
    protected $BankAccountIBAN;

    /**
     * @ORM\Column(name="bank_account_bic", type="string")
     *
     * @var string
     */
    protected $BankAccountBIC;
}
