<?php

namespace DC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serie
 *
 * @ORM\Table(name="serie")
 * @ORM\Entity(repositoryClass="DC\PlatformBundle\Entity\SerieRepository")
 */
class Serie
{
    /**
     * @var string
     *
     * @ORM\Column(name="CODSER", type="string", length=4, nullable=false, options={"fixed" = true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codser;

    /**
     * @var string
     *
     * @ORM\Column(name="SERIE", type="string", length=15, nullable=false)
     */
    private $serie;



    /**
     * Get codser
     *
     * @return string 
     */
    public function getCodser()
    {
        return $this->codser;
    }

    /**
     * Set serie
     *
     * @param string $serie
     * @return Serie
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return string 
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set codser
     *
     * @param string $codser
     * @return Serie
     */
    public function setCodser($codser)
    {
        $this->codser = $codser;

        return $this;
    }
}
