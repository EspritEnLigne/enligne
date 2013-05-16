<?php

namespace Esprit\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="Esp_Classe")
 * @ORM\Entity(repositoryClass="Esprit\EnseignantBundle\Entity\ClasseRepository")
 */
class Classe {

    /**
     * @ORM\OneToMany(targetEntity="Absencelist", mappedBy="classe", cascade={"persist"})
     */
    private $absencelist;

    /**
     * @ORM\ManyToMany(targetEntity="Esprit\UserBundle\Entity\EspEnseignant", mappedBy="classes")
     * */
    private $enseignants;

    /**
     * @ORM\OneToMany(targetEntity="Absence", mappedBy="classe",cascade={"persist"})
     */
    private $absences;

    /**
     * @ORM\OneToMany(targetEntity="Esprit\UserBundle\Entity\EspEtudiant", mappedBy="classe",cascade={"persist"})
     */
    private $etudiants;

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
     * @return Classe
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

    
    public function __toString() {
        return $this->getLibelle();
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->absencelist = new \Doctrine\Common\Collections\ArrayCollection();
        $this->enseignants = new \Doctrine\Common\Collections\ArrayCollection();
        $this->absences = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etudiants = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add absencelist
     *
     * @param \Esprit\EnseignantBundle\Entity\Absencelist $absencelist
     * @return Classe
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
     * Add enseignants
     *
     * @param \Esprit\UserBundle\Entity\EspEnseignant $enseignants
     * @return Classe
     */
    public function addEnseignant(\Esprit\UserBundle\Entity\EspEnseignant $enseignants)
    {
        $this->enseignants[] = $enseignants;
    
        return $this;
    }

    /**
     * Remove enseignants
     *
     * @param \Esprit\UserBundle\Entity\EspEnseignant $enseignants
     */
    public function removeEnseignant(\Esprit\UserBundle\Entity\EspEnseignant $enseignants)
    {
        $this->enseignants->removeElement($enseignants);
    }

    /**
     * Get enseignants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEnseignants()
    {
        return $this->enseignants;
    }

    /**
     * Add absences
     *
     * @param \Esprit\EnseignantBundle\Entity\Absence $absences
     * @return Classe
     */
    public function addAbsence(\Esprit\EnseignantBundle\Entity\Absence $absences)
    {
        $this->absences[] = $absences;
    
        return $this;
    }

    /**
     * Remove absences
     *
     * @param \Esprit\EnseignantBundle\Entity\Absence $absences
     */
    public function removeAbsence(\Esprit\EnseignantBundle\Entity\Absence $absences)
    {
        $this->absences->removeElement($absences);
    }

    /**
     * Get absences
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAbsences()
    {
        return $this->absences;
    }

    /**
     * Add etudiants
     *
     * @param \Esprit\UserBundle\Entity\EspEtudiant $etudiants
     * @return Classe
     */
    public function addEtudiant(\Esprit\UserBundle\Entity\EspEtudiant $etudiants)
    {
        $this->etudiants[] = $etudiants;
    
        return $this;
    }

    /**
     * Remove etudiants
     *
     * @param \Esprit\UserBundle\Entity\EspEtudiant $etudiants
     */
    public function removeEtudiant(\Esprit\UserBundle\Entity\EspEtudiant $etudiants)
    {
        $this->etudiants->removeElement($etudiants);
    }

    /**
     * Get etudiants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtudiants()
    {
        return $this->etudiants;
    }
}