<?php

namespace DC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Challenge
 *
 * @ORM\Table(name="challenge")
 * @ORM\Entity(repositoryClass="DC\PlatformBundle\Entity\ChallengeRepository")
 */
class Challenge
{
    /**
     * @var string
     *
     * @ORM\Column(name="CDOCHAL", type="string", length=3, nullable=false, options={"fixed" = true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdochal;

    /**
     * @var string
     *
     * @ORM\Column(name="CHALLENGE", type="string", length=15, nullable=false)
     */
    private $challenge;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATDEBUT", type="date", nullable=false)
     */
    private $datdebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATFIN", type="date", nullable=false)
     */
    private $datfin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Voilier", mappedBy="cdochal")
     */
    private $numvoil;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->numvoil = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get cdochal
     *
     * @return string 
     */
    public function getCdochal()
    {
        return $this->cdochal;
    }

    /**
     * Set challenge
     *
     * @param string $challenge
     * @return Challenge
     */
    public function setChallenge($challenge)
    {
        $this->challenge = $challenge;

        return $this;
    }

    /**
     * Get challenge
     *
     * @return string 
     */
    public function getChallenge()
    {
        return $this->challenge;
    }

    /**
     * Set datdebut
     *
     * @param \DateTime $datdebut
     * @return Challenge
     */
    public function setDatdebut($datdebut)
    {
        $this->datdebut = $datdebut;

        return $this;
    }

    /**
     * Get datdebut
     *
     * @return \DateTime 
     */
    public function getDatdebut()
    {
        return $this->datdebut;
    }

    /**
     * Set datfin
     *
     * @param \DateTime $datfin
     * @return Challenge
     */
    public function setDatfin($datfin)
    {
        $this->datfin = $datfin;

        return $this;
    }

    /**
     * Get datfin
     *
     * @return \DateTime 
     */
    public function getDatfin()
    {
        return $this->datfin;
    }

    /**
     * Add numvoil
     *
     * @param \DC\PlatformBundle\Entity\Voilier $numvoil
     * @return Challenge
     */
    public function addNumvoil(\DC\PlatformBundle\Entity\Voilier $numvoil)
    {
        $this->numvoil[] = $numvoil;

        return $this;
    }

    /**
     * Remove numvoil
     *
     * @param \DC\PlatformBundle\Entity\Voilier $numvoil
     */
    public function removeNumvoil(\DC\PlatformBundle\Entity\Voilier $numvoil)
    {
        $this->numvoil->removeElement($numvoil);
    }

    /**
     * Get numvoil
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNumvoil()
    {
        return $this->numvoil;
    }

    /**
     * Set cdochal
     *
     * @param string $cdochal
     * @return Challenge
     */
    public function setCdochal($cdochal)
    {
        $this->cdochal = $cdochal;

        return $this;
    }
}
