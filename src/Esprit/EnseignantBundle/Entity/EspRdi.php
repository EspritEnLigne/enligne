<?php

namespace Esprit\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * EspRdi
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Esprit\EnseignantBundle\Entity\EspRdiRepository")
 */
class EspRdi
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
     * @ORM\Column(name="UniteRecherche", type="string", length=255)
     */
    private $uniteRecherche;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateAffectation", type="date")
     */
    private $dateAffectation;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\ManyToMany(targetEntity="Esprit\UserBundle\Entity\EspEnseignant", mappedBy="prdi")
     * @ORM\JoinTable(name="ens_rdi")
     */
    private $ens;
    
    /**
     * @ORM\OneToMany(targetEntity="EspTacheRdi", mappedBy="rdi")
     */
    private $tacherdi;
    
    public function __construct() {
        $this->ens = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tacherdi = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set uniteRecherche
     *
     * @param string $uniteRecherche
     * @return EspRdi
     */
    public function setUniteRecherche($uniteRecherche)
    {
        $this->uniteRecherche = $uniteRecherche;
    
        return $this;
    }

    /**
     * Get uniteRecherche
     *
     * @return string 
     */
    public function getUniteRecherche()
    {
        return $this->uniteRecherche;
    }

    /**
     * Set dateAffectation
     *
     * @param \DateTime $dateAffectation
     * @return EspRdi
     */
    public function setDateAffectation($dateAffectation)
    {
        $this->dateAffectation = $dateAffectation;
    
        return $this;
    }

    /**
     * Get dateAffectation
     *
     * @return \DateTime 
     */
    public function getDateAffectation()
    {
        return $this->dateAffectation;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return EspRdi
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
}
