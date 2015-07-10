<?php

namespace DC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voilier
 *
 * @ORM\Table(name="voilier", indexes={@ORM\Index(name="CIF_2_FK", columns={"NUMCLAS"}), @ORM\Index(name="APPARTENIR_FK", columns={"IDMBR"})})
 * @ORM\Entity(repositoryClass="DC\PlatformBundle\Entity\VoilierRepository")
 */
class Voilier
{
    /**
     * @var string
     *
     * @ORM\Column(name="NUMVOIL", type="decimal", precision=4, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numvoil;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMVOIL", type="string", length=15, nullable=false)
     */
    private $nomvoil;

    /**
     * @var integer
     *
     * @ORM\Column(name="NBRPTS", type="integer", nullable=true)
     */
    private $nbrpts;

    /**
     * @var \Classe
     *
     * @ORM\ManyToOne(targetEntity="Classe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NUMCLAS", referencedColumnName="NUMCLAS", nullable=false)
     * })
     */
    private $numclas;

    /**
     * @var \Proprietaire
     *
     * @ORM\ManyToOne(targetEntity="Proprietaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDMBR", referencedColumnName="IDMBR", nullable=false)
     * })
     */
    private $idmbr;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Challenge", inversedBy="numvoil")
     * @ORM\JoinTable(name="classer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="NUMVOIL", referencedColumnName="NUMVOIL")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="CDOCHAL", referencedColumnName="CDOCHAL")
     *   }
     * )
     */
    private $cdochal;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cdochal = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get numvoil
     *
     * @return string 
     */
    public function getNumvoil()
    {
        return $this->numvoil;
    }

    /**
     * Set nomvoil
     *
     * @param string $nomvoil
     * @return Voilier
     */
    public function setNomvoil($nomvoil)
    {
        $this->nomvoil = $nomvoil;

        return $this;
    }

    /**
     * Get nomvoil
     *
     * @return string 
     */
    public function getNomvoil()
    {
        return $this->nomvoil;
    }

    /**
     * Set nbrpts
     *
     * @param integer $nbrpts
     * @return Voilier
     */
    public function setNbrpts($nbrpts)
    {
        $this->nbrpts = $nbrpts;

        return $this;
    }

    /**
     * Get nbrpts
     *
     * @return integer 
     */
    public function getNbrpts()
    {
        return $this->nbrpts;
    }

    /**
     * Set numclas
     *
     * @param \DC\PlatformBundle\Entity\Classe $numclas
     * @return Voilier
     */
    public function setNumclas(\DC\PlatformBundle\Entity\Classe $numclas = null)
    {
        $this->numclas = $numclas;

        return $this;
    }

    /**
     * Get numclas
     *
     * @return \DC\PlatformBundle\Entity\Classe 
     */
    public function getNumclas()
    {
        return $this->numclas;
    }

    /**
     * Set idmbr
     *
     * @param \DC\PlatformBundle\Entity\Proprietaire $idmbr
     * @return Voilier
     */
    public function setIdmbr(\DC\PlatformBundle\Entity\Proprietaire $idmbr = null)
    {
        $this->idmbr = $idmbr;

        return $this;
    }

    /**
     * Get idmbr
     *
     * @return \DC\PlatformBundle\Entity\Proprietaire 
     */
    public function getIdmbr()
    {
        return $this->idmbr;
    }

    /**
     * Add cdochal
     *
     * @param \DC\PlatformBundle\Entity\Challenge $cdochal
     * @return Voilier
     */
    public function addCdochal(\DC\PlatformBundle\Entity\Challenge $cdochal)
    {
        $this->cdochal[] = $cdochal;

        return $this;
    }

    /**
     * Remove cdochal
     *
     * @param \DC\PlatformBundle\Entity\Challenge $cdochal
     */
    public function removeCdochal(\DC\PlatformBundle\Entity\Challenge $cdochal)
    {
        $this->cdochal->removeElement($cdochal);
    }

    /**
     * Get cdochal
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCdochal()
    {
        return $this->cdochal;
    }

    /**
     * Set numvoil
     *
     * @param string $numvoil
     * @return Voilier
     */
    public function setNumvoil($numvoil)
    {
        $this->numvoil = $numvoil;

        return $this;
    }
}
