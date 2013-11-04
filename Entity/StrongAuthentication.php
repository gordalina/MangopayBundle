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

use Gordalina\Mangopay\Model\StrongAuthentication as StrongAuthenticationModel;

/**
 * @ORM\Table(name="mangopay_strong_authentication")
 * @ORM\Entity
 */
class StrongAuthentication extends StrongAuthenticationModel
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
     * @ORM\Column(name="beneficiary_id", type="integer", nullable=true)
     *
     * @var integer
     */
    protected $BeneficiaryID;

    /**
     * @ORM\Column(name="url_request", type="string")
     *
     * @var string
     */
    protected $UrlRequest;

    /**
     * @ORM\Column(name="is_documents_transmitted", type="boolean")
     *
     * @var boolean
     */
    protected $IsDocumentsTransmitted;

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
     * @ORM\Column(name="message", type="string", nullable=true)
     *
     * @var string
     */
    protected $Message;
}
