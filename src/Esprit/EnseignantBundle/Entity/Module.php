<?php

namespace Esprit\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="Esp_Module")
 * @ORM\Entity(repositoryClass="Esprit\EnseignantBundle\Entity\ModuleRepository")
 */
class Module {

    /**
     * @ORM\OneToMany(targetEntity="Absencelist", mappedBy="module", cascade={"persist"})
     */
    private $absencelist;

    /**
     * @ORM\OneToMany(targetEntity="Matiere", mappedBy="module",cascade={"persist"})
     */
    private $matieres;

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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_heure", type="integer")
     */
    private $nbHeure;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Module
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Set nbHeure
     *
     * @param integer $nbHeure
     * @return Module
     */
    public function setNbHeure($nbHeure) {
        $this->nbHeure = $nbHeure;

        return $this;
    }

    /**
     * Get nbHeure
     *
     * @return integer 
     */
    public function getNbHeure() {
        return $this->nbHeure;
    }

    
    public function __toString() {
        return $this->getLibelle();
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->absencelist = new \Doctrine\Common\Collections\ArrayCollection();
        $this->matieres = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add absencelist
     *
     * @param \Esprit\EnseignantBundle\Entity\Absencelist $absencelist
     * @return Module
     */
    public function addAbsencelist(\Esprit\EnseignantBundle\Entity\Absencelist $absencelist)
    {
        $this->absencelist[] = $absencelist;
    
        return $this;
    }

    /**
     * Remove absencelist
     *
     * @param \Esprit\EnseignantBundle\Entity\Absencelist $absencelist
     */
    public function removeAbsencelist(\Esprit\EnseignantBundle\Entity\Absencelist $absencelist)
    {
        $this->absencelist->removeElement($absencelist);
    }

    /**
     * Get absencelist
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAbsencelist()
    {
        return $this->absencelist;
    }

    /**
     * Add matieres
     *
     * @param \Esprit\EnseignantBundle\Entity\Matiere $matieres
     * @return Module
     */
    public function addMatiere(\Esprit\EnseignantBundle\Entity\Matiere $matieres)
    {
        $this->matieres[] = $matieres;
    
        return $this;
    }

    /**
     * Remove matieres
     *
     * @param \Esprit\EnseignantBundle\Entity\Matiere $matieres
     */
    public function removeMatiere(\Esprit\EnseignantBundle\Entity\Matiere $matieres)
    {
        $this->matieres->removeElement($matieres);
    }

    /**
     * Get matieres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMatieres()
    {
        return $this->matieres;
    }
}