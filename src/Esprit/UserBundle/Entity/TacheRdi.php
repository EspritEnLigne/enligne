<?php

namespace Esprit\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TacheRdi
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Esprit\UserBundle\Entity\TacheRdiRepository")
 */
class TacheRdi
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
     * @var integer
     *
     * @ORM\Column(name="avancement", type="integer")
     */
    private $avancement;
     /**
     * @ORM\ManyToOne(targetEntity="ProjetRdi" , inversedBy="taches")
     * @ORM\JoinColumn(name="id_rdi", referencedColumnName="id")
     */
    private $projet;

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
     * @return TacheRdi
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
     * Set avancement
     *
     * @param integer $avancement
     * @return TacheRdi
     */
    public function setAvancement($avancement)
    {
        $this->avancement = $avancement;
    
        return $this;
    }

    /**
     * Get avancement
     *
     * @return integer 
     */
    public function getAvancement()
    {
        return $this->avancement;
    }

    /**
     * Set projet
     *
     * @param \Esprit\UserBundle\Entity\ProjetRdi $projet
     * @return TacheRdi
     */
    public function setProjet(\Esprit\UserBundle\Entity\ProjetRdi $projet = null)
    {
        $this->projet = $projet;
    
        return $this;
    }

    /**
     * Get projet
     *
     * @return \Esprit\UserBundle\Entity\ProjetRdi 
     */
    public function getProjet()
    {
        return $this->projet;
    }
}