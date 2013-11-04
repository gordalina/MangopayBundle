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

use Gordalina\Mangopay\Model\PaymentCard as PaymentCardModel;

/**
 * @ORM\Table(name="mangopay_payment_card")
 * @ORM\Entity
 */
class PaymentCard extends PaymentCardModel
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
     * @ORM\Column(name="owner_id", type="integer")
     *
     * @var integer
     */
    protected $OwnerID;

    /**
     * @ORM\Column(name="card_number", type="string")
     *
     * @var string
     */
    protected $CardNumber;

    /**
     * @ORM\Column(name="redirect_url", type="string", nullable=true)
     *
     * @var string
     */
    protected $RedirectURL;

    /**
     * @ORM\Column(name="template_url", type="string", nullable=true)
     *
     * @var string
     */
    protected $TemplateURL;

    /**
     * @ORM\Column(name="return_url", type="string", nullable=true)
     *
     * @var string
     */
    protected $ReturnURL;

    /**
     * @ORM\Column(name="culture", type="string", nullable=true)
     *
     * @var string
     */
    protected $Culture;
}
