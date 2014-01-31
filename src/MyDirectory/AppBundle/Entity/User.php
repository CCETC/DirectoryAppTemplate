<?php

namespace MyDirectory\AppBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __toString()
    {
        if($this->getEmail()) return $this->getEmail();
        else return "";
    }

    /**
     * @ORM\OneToOne(targetEntity="Listing", mappedBy="user", cascade={"persist", "remove"})
     **/
    private $listing; 

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set listing
     *
     * @return ListingLocation
     */
    public function setListing($listing = null)
    {
        $this->listing = $listing;
    
        return $this;
    }

    /**
     * Get listing
     *
     * @return \MyDirectory\AppBundle\Entity\Listing 
     */
    public function getListing()
    {
        return $this->listing;
    }

}