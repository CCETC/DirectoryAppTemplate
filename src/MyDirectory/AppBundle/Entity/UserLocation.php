<?php

namespace MyDirectory\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CCETC\DirectoryBundle\Entity\Location;

/**
 * UserLocation
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class UserLocation extends Location
{
    
    /** @ORM\OneToMany(targetEntity="UserLocationAlias", mappedBy="location", cascade={"persist", "remove"}) */
    protected $aliases;
    
    /** @ORM\OneToMany(targetEntity="LocationDistance", mappedBy="userLocation", cascade={"persist", "remove"}) */
    protected $distances;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->aliases = new \Doctrine\Common\Collections\ArrayCollection();
        $this->distances = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add aliases
     *
     * @param \MyDirectory\AppBundle\Entity\LocationAlias $aliases
     * @return UserLocation
     */
    public function addAlias(\MyDirectory\AppBundle\Entity\UserLocationAlias $aliases)
    {
        $this->aliases[] = $aliases;
    
        return $this;
    }

    /**
     * Remove aliases
     *
     * @param \MyDirectory\AppBundle\Entity\LocationAlias $aliases
     */
    public function removeAlias(\MyDirectory\AppBundle\Entity\UserLocationAlias $aliases)
    {
        $this->aliases->removeElement($aliases);
    }

    /**
     * Get aliases
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAliases()
    {
        return $this->aliases;
    }

    /**
     * Add distances
     *
     * @param \MyDirectory\AppBundle\Entity\LocationDistance $distances
     * @return UserLocation
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

    /**
     * Add aliases
     *
     * @param \MyDirectory\AppBundle\Entity\UserLocationAlias $aliases
     * @return UserLocation
     */
    public function addAliase(\MyDirectory\AppBundle\Entity\UserLocationAlias $aliases)
    {
        $this->aliases[] = $aliases;
    
        return $this;
    }

    /**
     * Remove aliases
     *
     * @param \MyDirectory\AppBundle\Entity\UserLocationAlias $aliases
     */
    public function removeAliase(\MyDirectory\AppBundle\Entity\UserLocationAlias $aliases)
    {
        $this->aliases->removeElement($aliases);
    }
}