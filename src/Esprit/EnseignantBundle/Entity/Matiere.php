<?php

namespace Esprit\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table(name="Esp_Matiere")
 * @ORM\Entity(repositoryClass="Esprit\EnseignantBundle\Entity\MatiereRepository")
 */
class Matiere
{
    /**
     * @ORM\ManyToOne(targetEntity="Module",inversedBy="matieres")
     * @ORM\JoinColumn(name="module_id", referencedColumnName="id")
     */
    private $module;
    
    /**
     * @ORM\OneToMany(targetEntity="Absence", mappedBy="matiere",cascade={"persist"})
     */
    private $absences;
    
        /**
     * @ORM\ManyToMany(targetEntity="Classe", cascade={"persist"})
     */
    private $classes;
    /**
     * @ORM\ManyToMany(targetEntity="Esprit\UserBundle\Entity\EspEnseignant", mappedBy="matieres")
     * */
    private $enseignants;
    

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
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Matiere
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->absences = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    
    public function __toString() {
        return $this->getLibelle();
    }


    /**
     * Set module
     *
     * @param \Esprit\EnseignantBundle\Entity\Module $module
     * @return Matiere
     */
    public function setModule(\Esprit\EnseignantBundle\Entity\Module $module = null)
    {
        $this->module = $module;
    
        return $this;
    }

    /**
     * Get module
     *
     * @return \Esprit\EnseignantBundle\Entity\Module 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Add absences
     *
     * @param \Esprit\EnseignantBundle\Entity\Absence $absences
     * @return Matiere
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
     * Add classes
     *
     * @param \Esprit\EnseignantBundle\Entity\Classe $classes
     * @return Matiere
     */
    public function addClasse(\Esprit\EnseignantBundle\Entity\Classe $classes)
    {
        $this->classes[] = $classes;
    
        return $this;
    }

    /**
     * Remove classes
     *
     * @param \Esprit\EnseignantBundle\Entity\Classe $classes
     */
    public function removeClasse(\Esprit\EnseignantBundle\Entity\Classe $classes)
    {
        $this->classes->removeElement($classes);
    }

    /**
     * Get classes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClasses()
    {
        return $this->classes;
    }


    /**
     * Add enseignants
     *
     * @param \Esprit\UserBundle\Entity\EspEnseignant $enseignants
     * @return Matiere
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
}