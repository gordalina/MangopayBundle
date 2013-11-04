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

use Gordalina\Mangopay\Model\User as UserModel;

/**
 * @ORM\Table(name="mangopay_user")
 * @ORM\Entity
 */
class User extends UserModel
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
     * @ORM\Column(name="email", type="string")
     *
     * @var string
     */
    protected $Email;

    /**
     * @ORM\Column(name="first_name", type="string")
     *
     * @var string
     */
    protected $FirstName;

    /**
     * @ORM\Column(name="last_name", type="string")
     *
     * @var string
     */
    protected $LastName;

    /**
     * @ORM\Column(name="has_registered_means_of_payment", type="boolean", nullable=true)
     *
     * @var boolean
     */
    protected $HasRegisteredMeansOfPayment;

    /**
     * @ORM\Column(name="can_register_mean_of_payment", type="boolean", nullable=true)
     *
     * @var boolean
     */
    protected $CanRegisterMeanOfPayment;

    /**
     * @ORM\Column(name="ip", type="string")
     *
     * @var string
     */
    protected $IP;

    /**
     * @ORM\Column(name="birthday", type="datetime")
     *
     * @var \DateTime
     */
    protected $Birthday;

    /**
     * @ORM\Column(name="password", type="string")
     *
     * @var string
     */
    protected $Password;

    /**
     * @ORM\Column(name="nationality", type="string")
     *
     * @var string
     */
    protected $Nationality;

    /**
     * @ORM\Column(name="person_type", type="string")
     *
     * @var string
     */
    protected $PersonType;

    /**
     * @ORM\Column(name="personal_wallet_amount", type="integer")
     *
     * @var integer
     */
    protected $PersonalWalletAmount;

    /**
     * @ORM\Column(name="is_strong_authenticated", type="boolean")
     *
     * @var boolean
     */
    protected $IsStrongAuthenticated;
}
