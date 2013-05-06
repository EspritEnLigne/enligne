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
    
    public function __toString() {
        return $this->getLibelle();
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->absences = new \Doctrine\Common\Collections\ArrayCollection();
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
}