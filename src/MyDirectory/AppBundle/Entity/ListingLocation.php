<?php

namespace MyDirectory\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CCETC\DirectoryBundle\Entity\Location;

/**
 * ListingLocation
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class ListingLocation extends Location
{
    /**
     * @ORM\OneToOne(targetEntity="Listing", inversedBy="location")
     * @ORM\JoinColumn(name="listing_id", referencedColumnName="id")
     **/
    private $listing; 
    
    /** @ORM\OneToMany(targetEntity="LocationDistance", mappedBy="listingLocation", cascade={"persist", "remove"}) */
    protected $distances;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->distances = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set listing
     *
     * @param \MyDirectory\AppBundle\Entity\Listing $listing
     * @return ListingLocation
     */
    public function setListing(\MyDirectory\AppBundle\Entity\Listing $listing = null)
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

    /**
     * Add distances
     *
     * @param \MyDirectory\AppBundle\Entity\LocationDistance $distances
     * @return ListingLocation
     */
    public function addDistance(\MyDirectory\AppBundle\Entity\LocationDistance $distances)
    {
        $this->distances[] = $distances;
    
        return $this;
    }

    /**
     * Remove distances
     *
     * @param \MyDirectory\AppBundle\Entity\LocationDistance $distances
     */
    public function removeDistance(\MyDirectory\AppBundle\Entity\LocationDistance $distances)
    {
        $this->distances->removeElement($distances);
    }

    /**
     * Get distances
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDistances()
    {
        return $this->distances;
    }
}