<?php

namespace MyDirectory\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * UserLocationAlias
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class UserLocationAlias
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
     * @var string $alias
     *
     * @ORM\Column(name="alias", type="string", length=255, nullable=true)
     */
    private $alias;
    
    /** @ORM\ManyToOne(targetEntity="UserLocation", inversedBy="aliases") */
    protected $location;
        

    /**
     * Set alias
     *
     * @param string $alias
     * @return LocationAlias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    
        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
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
     * Set location
     *
     * @param \MyDirectory\AppBundle\Entity\UserLocation $location
     * @return UserLocationAlias
     */
    public function setLocation(\MyDirectory\AppBundle\Entity\UserLocation $location = null)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return \MyDirectory\AppBundle\Entity\UserLocation 
     */
    public function getLocation()
    {
        return $this->location;
    }
}