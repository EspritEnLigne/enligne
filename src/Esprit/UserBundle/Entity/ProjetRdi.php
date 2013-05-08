<?php

namespace Esprit\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjetRdi
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Esprit\UserBundle\Entity\ProjetRdiRepository")
 */
class ProjetRdi
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
     * @ORM\Column(name="UR", type="string", length=255)
     */
    private $uR;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateaffectation", type="date")
     */
    private $dateaffectation;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    /**
     * @ORM\ManyToOne(targetEntity="EspEnseignant" , inversedBy="projetrdi")
     * @ORM\JoinColumn(name="id_projetrdi", referencedColumnName="id_ens")
     */
    private $espens;
    /**
     * @ORM\OneToMany(targetEntity="TacheRdi" ,mappedBy="projet")
     */
    private $taches;

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
     * Set uR
     *
     * @param string $uR
     * @return ProjetRdi
     */
    public function setUR($uR)
    {
        $this->uR = $uR;
    
        return $this;
    }

    /**
     * Get uR
     *
     * @return string 
     */
    public function getUR()
    {
        return $this->uR;
    }

    /**
     * Set dateaffectation
     *
     * @param \DateTime $dateaffectation
     * @return ProjetRdi
     */
    public function setDateaffectation($dateaffectation)
    {
        $this->dateaffectation = $dateaffectation;
    
        return $this;
    }

    /**
     * Get dateaffectation
     *
     * @return \DateTime 
     */
    public function getDateaffectation()
    {
        return $this->dateaffectation;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return ProjetRdi
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
     * Set description
     *
     * @param string $description
     * @return ProjetRdi
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->taches = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set espens
     *
     * @param \Esprit\UserBundle\Entity\EspEnseignant $espens
     * @return ProjetRdi
     */
    public function setEspens(\Esprit\UserBundle\Entity\EspEnseignant $espens = null)
    {
        $this->espens = $espens;
    
        return $this;
    }

    /**
     * Get espens
     *
     * @return \Esprit\UserBundle\Entity\EspEnseignant 
     */
    public function getEspens()
    {
        return $this->espens;
    }

    /**
     * Add taches
     *
     * @param \Esprit\UserBundle\Entity\TacheRdi $taches
     * @return ProjetRdi
     */
    public function addTache(\Esprit\UserBundle\Entity\TacheRdi $taches)
    {
        $this->taches[] = $taches;
    
        return $this;
    }

    /**
     * Remove taches
     *
     * @param \Esprit\UserBundle\Entity\TacheRdi $taches
     */
    public function removeTache(\Esprit\UserBundle\Entity\TacheRdi $taches)
    {
        $this->taches->removeElement($taches);
    }

    /**
     * Get taches
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTaches()
    {
        return $this->taches;
    }
    public function __toString() {
        return $this->getTitre();
    }
}