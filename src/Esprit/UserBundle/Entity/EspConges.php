<?php

namespace Esprit\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EspConges
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Esprit\UserBundle\Entity\EspCongesRepository")
 */
class EspConges
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
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="date")
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="date")
     */
    private $datefin;
    
    /**
     * @ORM\ManyToOne(targetEntity="EspEnseignant" , inversedBy="conges")
     * @ORM\JoinColumn(name="ens_id", referencedColumnName="id")
     */
    private $espconges;

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
     * Set titre
     *
     * @param string $titre
     * @return EspConges
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return EspConges
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    
        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return EspConges
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    
        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set espconges
     *
     * @param \Esprit\UserBundle\Entity\EspEnseignant $espconges
     * @return EspConges
     */
    public function setEspconges(\Esprit\UserBundle\Entity\EspEnseignant $espconges = null)
    {
        $this->espconges = $espconges;
    
        return $this;
    }

    /**
     * Get espconges
     *
     * @return \Esprit\UserBundle\Entity\EspEnseignant 
     */
    public function getEspconges()
    {
        return $this->espconges;
    }
}