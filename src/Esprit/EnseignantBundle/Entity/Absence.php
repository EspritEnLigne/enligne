<?php

namespace Esprit\EnseignantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Absence
 *
 * @ORM\Table(name="Esp_Absence")
 * @ORM\Entity(repositoryClass="Esprit\EnseignantBundle\Entity\AbsenceRepository")
 */
class Absence
{
    /**
     * @ORM\ManyToOne(targetEntity="Matiere",inversedBy="absences")
     * @ORM\JoinColumn(name="matiere_id", referencedColumnName="id")
     */
    private $matiere;
    
    /**
     * @ORM\ManyToOne(targetEntity="Esprit\UserBundle\Entity\EspEnseignant",inversedBy="absences")
     * @ORM\JoinColumn(name="enseignant_id", referencedColumnName="id")
     */
    private $enseignant;
    
        /**
     * @ORM\ManyToOne(targetEntity="Classe",inversedBy="absences")
     * @ORM\JoinColumn(name="classe_id", referencedColumnName="id")
     */
    private $classe;
    
    /**
     * @ORM\ManyToOne(targetEntity="Esprit\UserBundle\Entity\EspEtudiant",inversedBy="absences")
     * @ORM\JoinColumn(name="etudiant_id", referencedColumnName="id")
     */
    private $etudiant;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="annee_deb", type="date")
     */
    private $anneeDeb;
    
        /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_saisie", type="date")
     */
    private $dateSaisie;


    /**
     * @var string
     *
     * @ORM\Column(name="remarque", type="text")
     */
    private $remarque;
    
    /**
     * @var string
     *
     * @ORM\Column(name="semestre", type="string", length=255)
     */
    private $semestre;
    
        /**
     * @var boolean
     *
     * @ORM\Column(name="justifier", type="boolean")
     */
    private $justifier;



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
     * Set remarque
     *
     * @param string $remarque
     * @return Absence
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;
    
        return $this;
    }

    /**
     * Get remarque
     *
     * @return string 
     */
    public function getRemarque()
    {
        return $this->remarque;
    }


    /**
     * Set justifier
     *
     * @param boolean $justifier
     * @return Absence
     */
    public function setJustifier($justifier)
    {
        $this->justifier = $justifier;
    
        return $this;
    }

    /**
     * Get justifier
     *
     * @return boolean 
     */
    public function getJustifier()
    {
        return $this->justifier;
    }

    /**
     * Set dateSaisie
     *
     * @param \DateTime $dateSaisie
     * @return Absence
     */
    public function setDateSaisie($dateSaisie)
    {
        $this->dateSaisie = $dateSaisie;
    
        return $this;
    }

    /**
     * Get dateSaisie
     *
     * @return \DateTime 
     */
    public function getDateSaisie()
    {
        return $this->dateSaisie;
    }

    /**
     * Set semestre
     *
     * @param string $semestre
     * @return Absence
     */
    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;
    
        return $this;
    }

    /**
     * Get semestre
     *
     * @return string 
     */
    public function getSemestre()
    {
        return $this->semestre;
    }

    /**
     * Set anneeDeb
     *
     * @param \DateTime $anneeDeb
     * @return Absence
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
     * Set matiere
     *
     * @param \Esprit\EnseignantBundle\Entity\Matiere $matiere
     * @return Absence
     */
    public function setMatiere(\Esprit\EnseignantBundle\Entity\Matiere $matiere = null)
    {
        $this->matiere = $matiere;
    
        return $this;
    }

    /**
     * Get matiere
     *
     * @return \Esprit\EnseignantBundle\Entity\Matiere 
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set enseignant
     *
     * @param \Esprit\UserBundle\Entity\EspEnseignant $enseignant
     * @return Absence
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
     * @return Absence
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
     * Set etudiant
     *
     * @param \Esprit\UserBundle\Entity\EspEtudiant $etudiant
     * @return Absence
     */
    public function setEtudiant(\Esprit\UserBundle\Entity\EspEtudiant $etudiant = null)
    {
        $this->etudiant = $etudiant;
    
        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \Esprit\UserBundle\Entity\EspEtudiant 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }
}