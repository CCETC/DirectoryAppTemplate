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
     * @return \HSC\AppBundle\Entity\Location 
     */
    public function getLocation()
    {
        return $this->location;
    }
 
  

}