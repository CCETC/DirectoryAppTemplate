<?php

namespace MyDirectory\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use CCETC\DirectoryBundle\Entity\BaseListing;

/**
 * Listing
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Listing extends BaseListing
{

    /**
     * @ORM\OneToOne(targetEntity="ListingLocation", mappedBy="listing", cascade={"persist", "remove"})
     **/
    private $location;    
    
    /**
     * @ORM\OneToOne(targetEntity="User", inversedBy="listing")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     **/
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
    }
    
    /**
     * Set location
     *
     * @param $location
     * @return Listing
     */
    public function setLocation($location = null)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return \MyDirectory\AppBundle\Entity\Location 
     */
    public function getLocation()
    {
        return $this->location;
    }
    
    /**
     * Set user
     *
     * @param $user
     * @return Listing
     */
    public function setUser($user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     */
    public function getUser()
    {
        return $this->user;
    }
  

}
