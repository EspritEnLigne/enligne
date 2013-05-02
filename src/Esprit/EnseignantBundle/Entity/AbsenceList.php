<?php

namespace Esprit\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsenceList
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Esprit\EnseignantBundle\Entity\AbsenceListRepository")
 */
class AbsenceList
{
    /**
     * @ORM\ManyToOne(targetEntity="Esprit\UserBundle\Entity\EspEnseignant",inversedBy="absencelist")
     * @ORM\JoinColumn(name="enseignant_id", referencedColumnName="id")
     */
    private $enseignant;
    
    /**
     * @ORM\ManyToOne(targetEntity="Classe",inversedBy="absencelist")
     * @ORM\JoinColumn(name="classe_id", referencedColumnName="id")
     */
    private $classe;
    
    /**
     * @ORM\ManyToOne(targetEntity="Module",inversedBy="absencelist")
     * @ORM\JoinColumn(name="module_id", referencedColumnName="id")
     */
    private $module;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="semstre", type="integer")
     */
    private $semstre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="AnneeDeb", type="date")
     */
    private $anneeDeb;


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
     * Set semstre
     *
     * @param integer $semstre
     * @return AbsenceList
     */
    public function setSemstre($semstre)
    {
        $this->semstre = $semstre;
    
        return $this;
    }

    /**
     * Get semstre
     *
     * @return integer 
     */
    public function getSemstre()
    {
        return $this->semstre;
    }

    /**
     * Set anneeDeb
     *
     * @param \DateTime $anneeDeb
     * @return AbsenceList
     */
    public function setAnneeDeb($anneeDeb)
    {
        $this->anneeDeb = $anneeDeb;
    
        return $this;
    }

    /**
     * Get anneeDeb
     *
     * @return \DateTime 
     */
    public function getAnneeDeb()
    {
        return $this->anneeDeb;
    }


    /**
     * Set enseignant
     *
     * @param \Esprit\UserBundle\Entity\EspEnseignant $enseignant
     * @return AbsenceList
     */
    public function setEnseignant(\Esprit\UserBundle\Entity\EspEnseignant $enseignant = null)
    {
        $this->enseignant = $enseignant;
    
        return $this;
    }

    /**
     * Get enseignant
     *
     * @return \Esprit\UserBundle\Entity\EspEnseignant 
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }

    /**
     * Set classe
     *
     * @param \Esprit\EnseignantBundle\Entity\Classe $classe
     * @return AbsenceList
     */
    public function setClasse(\Esprit\EnseignantBundle\Entity\Classe $classe = null)
    {
        $this->classe = $classe;
    
        return $this;
    }

    /**
     * Get classe
     *
     * @return \Esprit\EnseignantBundle\Entity\Classe 
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set module
     *
     * @param \Esprit\EnseignantBundle\Entity\Module $module
     * @return AbsenceList
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
}