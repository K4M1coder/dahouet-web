<?php

namespace DC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaire
 *
 * @ORM\Table(name="proprietaire", indexes={@ORM\Index(name="ETRE_FK", columns={"IDCLUB"})})
 * @ORM\Entity(repositoryClass="DC\PlatformBundle\Entity\ProprietaireRepository")
 */
class Proprietaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDMBR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idmbr;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDCLUB", type="integer", nullable=false)
     */
    private $idclub;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMMBR", type="string", length=15, nullable=false)
     */
    private $nommbr;

    /**
     * @var string
     *
     * @ORM\Column(name="MAILMBR", type="string", length=20, nullable=false)
     */
    private $mailmbr;

    /**
     * @var string
     *
     * @ORM\Column(name="PWMBR", type="string", length=10, nullable=false)
     */
    private $pwmbr;

    /**
     * Get idmbr
     *
     * @return integer 
     */
    public function getIdmbr()
    {
        return $this->idmbr;
    }

    /**
     * Set idclub
     *
     * @param integer $idclub
     * @return Proprietaire
     */
    public function setIdclub($idclub)
    {
        $this->idclub = $idclub;

        return $this;
    }

    /**
     * Get idclub
     *
     * @return integer 
     */
    public function getIdclub()
    {
        return $this->idclub;
    }

    /**
     * Set nommbr
     *
     * @param string $nommbr
     * @return Proprietaire
     */
    public function setNommbr($nommbr)
    {
        $this->nommbr = $nommbr;

        return $this;
    }

    /**
     * Get nommbr
     *
     * @return string 
     */
    public function getNommbr()
    {
        return $this->nommbr;
    }

    /**
     * Set mailmbr
     *
     * @param string $mailmbr
     * @return Proprietaire
     */
    public function setMailmbr($mailmbr)
    {
        $this->mailmbr = $mailmbr;

        return $this;
    }

    /**
     * Get mailmbr
     *
     * @return string 
     */
    public function getMailmbr()
    {
        return $this->mailmbr;
    }

    /**
     * Set pwmbr
     *
     * @param string $pwmbr
     * @return Proprietaire
     */
    public function setPwmbr($pwmbr)
    {
        $this->pwmbr = $pwmbr;

        return $this;
    }

    /**
     * Get pwmbr
     *
     * @return string 
     */
    public function getPwmbr()
    {
        return $this->pwmbr;
    }
 	

    /**
     * Set idmbr
     *
     * @param integer $idmbr
     * @return Proprietaire
     */
    public function setIdmbr($idmbr)
    {
        $this->idmbr = $idmbr;

        return $this;
    }
}
