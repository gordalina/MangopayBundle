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

use Gordalina\Mangopay\Model\Refund as RefundModel;

/**
 * @ORM\Table(name="mangopay_refund")
 * @ORM\Entity
 */
class Refund extends RefundModel
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
     * @ORM\Column(name="contribution_id", type="integer")
     *
     * @var integer
     */
    protected $ContributionID;

    /**
     * @ORM\Column(name="is_succeeded", type="boolean")
     *
     * @var boolean
     */
    protected $IsSucceeded;

    /**
     * @ORM\Column(name="is_completed", type="boolean")
     *
     * @var boolean
     */
    protected $IsCompleted;

    /**
     * @ORM\Column(name="error", type="object", nullable=true)
     *
     * @var object
     */
    protected $Error;
}
