<?php

namespace GSEB\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Object
 *
 * @ORM\Table(name="object")
 * @ORM\Entity(repositoryClass="GSEB\PlatformBundle\Repository\ObjectRepository")
 */
class Object
{    
    /**
     * @ORM\ManyToOne(targetEntity="GSEB\PlatformBundle\Entity\Rackspace", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $rackspace;

    /**
     * @ORM\ManyToOne(targetEntity="GSEB\PlatformBundle\Entity\Attribut", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $attribut;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="objtype_id", type="integer")
     */
    private $objtypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set objtypeId
     *
     * @param integer $objtypeId
     *
     * @return Object
     */
    public function setObjtypeId($objtypeId)
    {
        $this->objtypeId = $objtypeId;

        return $this;
    }

    /**
     * Get objtypeId
     *
     * @return int
     */
    public function getObjtypeId()
    {
        return $this->objtypeId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Object
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set rackspace
     *
     * @param \GSEB\PlatformBundle\Entity\Rackspace $rackspace
     *
     * @return Object
     */
    public function setRackspace(\GSEB\PlatformBundle\Entity\Rackspace $rackspace)
    {
        $this->rackspace = $rackspace;

        return $this;
    }

    /**
     * Get rackspace
     *
     * @return \GSEB\PlatformBundle\Entity\Rackspace
     */
    public function getRackspace()
    {
        return $this->rackspace;
    }

    /**
     * Set attribut
     *
     * @param \GSEB\PlatformBundle\Entity\Attribut $attribut
     *
     * @return Object
     */
    public function setAttribut(\GSEB\PlatformBundle\Entity\Attribut $attribut)
    {
        $this->attribut = $attribut;

        return $this;
    }

    /**
     * Get attribut
     *
     * @return \GSEB\PlatformBundle\Entity\Attribut
     */
    public function getAttribut()
    {
        return $this->attribut;
    }
}
