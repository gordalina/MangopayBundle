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

use Gordalina\Mangopay\Model\ContributionByWithdrawal as ContributionByWithdrawalModel;

/**
 * @ORM\Table(name="mangopay_contribution_by_withdrawal")
 * @ORM\Entity
 */
class ContributionByWithdrawal extends ContributionByWithdrawalModel
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
     * @ORM\Column(name="amount_declared", type="integer")
     *
     * @var integer
     */
    protected $AmountDeclared;

    /**
     * @ORM\Column(name="status", type="integer")
     *
     * @var integer
     */
    protected $Status;

    /**
     * @ORM\Column(name="amount", type="integer", nullable=true)
     *
     * @var integer
     */
    protected $Amount;

    /**
     * @ORM\Column(name="generated_reference", type="string", nullable=true)
     *
     * @var string
     */
    protected $GeneratedReference;

    /**
     * @ORM\Column(name="commentary", type="string", nullable=true)
     *
     * @var string
     */
    protected $Commentary;

    /**
     * @ORM\Column(name="bank_account_owner", type="string", nullable=true)
     *
     * @var string
     */
    protected $BankAccountOwner;

    /**
     * @ORM\Column(name="bank_account_iban", type="string", nullable=true)
     *
     * @var string
     */
    protected $BankAccountIBAN;

    /**
     * @ORM\Column(name="bank_account_bic", type="string", nullable=true)
     *
     * @var string
     */
    protected $BankAccountBIC;
}
