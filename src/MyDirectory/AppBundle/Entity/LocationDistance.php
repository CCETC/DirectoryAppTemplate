<?php

namespace MyDirectory\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * LocationDistance
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class LocationDistance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;   
    
   /**
    * @var string $distance
    *
    * @ORM\Column(name="distance", type="integer")
    */    
    private $distance;
    
    /** @ORM\ManyToOne(targetEntity="ListingLocation", inversedBy="distances") */
    protected $listingLocation;
    /** @ORM\ManyToOne(targetEntity="UserLocation", inversedBy="distances") */
    protected $userLocation;    
    

    /**
     * Set distance
     *
     * @param integer $distance
     * @return LocationDistance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    
        return $this;
    }

    /**
     * Get distance
     *
     * @return integer 
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set listingLocation
     *
     * @param \MyDirectory\AppBundle\Entity\ListingLocation $listingLocation
     * @return LocationDistance
     */
    public function setListingLocation(\MyDirectory\AppBundle\Entity\ListingLocation $listingLocation = null)
    {
        $this->listingLocation = $listingLocation;
    
        return $this;
    }

    /**
     * Get listingLocation
     *
     * @return \MyDirectory\AppBundle\Entity\ListingLocation 
     */
    public function getListingLocation()
    {
        return $this->listingLocation;
    }

    /**
     * Set userLocation
     *
     * @param \MyDirectory\AppBundle\Entity\UserLocation $userLocation
     * @return LocationDistance
     */
    public function setUserLocation(\MyDirectory\AppBundle\Entity\UserLocation $userLocation = null)
    {
        $this->userLocation = $userLocation;
    
        return $this;
    }

    /**
     * Get userLocation
     *
     * @return \MyDirectory\AppBundle\Entity\UserLocation 
     */
    public function getUserLocation()
    {
        return $this->userLocation;
    }
}