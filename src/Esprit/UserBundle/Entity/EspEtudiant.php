<?php

namespace Esprit\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * EspEtudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Esprit\UserBundle\Entity\EspEtudiantRepository")
 */
class EspEtudiant
{
        /**
     * @ORM\OneToMany(targetEntity="Esprit\EnseignantBundle\Entity\Absence", mappedBy="etudiant")
     */
    private $absences;

    /**
     * @ORM\ManyToOne(targetEntity="Esprit\EnseignantBundle\Entity\Classe",inversedBy="etudiants")
     * @ORM\JoinColumn(name="classe_id", referencedColumnName="id")
     */
    private $classe;

    
     /**
     * @ORM\OneToMany(targetEntity="Esprit\SeminaireBundle\Entity\InscritSemin",mappedBy="etudiant",cascade={"persist"})
     */
    private $inscriptions;
    /**
     * @var string
     *
     * @ORM\Column(name="id_et", type="string", length=10)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_et", type="string", length=30)
     */
    private $nomEt;

    /**
     * @var string
     *
     * @ORM\Column(name="pnom_et", type="string", length=30)
     */
    private $pnomEt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_nais_et", type="date")
     */
    private $dateNaisEt;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_nais_et", type="string", length=30)
     */
    private $lieuNaisEt;

    /**
     * @var string
     *
     * @ORM\Column(name="nature_et", type="string", length=2)
     */
    private $natureEt;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction_et", type="string", length=30)
     */
    private $fonctionEt;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_et", type="string", length=100)
     */
    private $adresseEt;
    
    /**
     * @ORM\ManyToOne(targetEntity="EspEnseignant")
     * @ORM\JoinColumn(name="id_enc", referencedColumnName="id")
     */
    private $encadrement;
     /**
     * @ORM\OneToOne(targetEntity="Esprit\EnseignantBundle\Entity\EspFichePfe")
     * @ORM\JoinColumn(name="fichepfe_id", referencedColumnName="id")
     */
    private $fichepfe;
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
     * Set nomEt
     *
     * @param string $nomEt
     * @return EspEtudiant
     */
    public function setNomEt($nomEt)
    {
        $this->nomEt = $nomEt;
    
        return $this;
    }

    /**
     * Get nomEt
     *
     * @return string 
     */
    public function getNomEt()
    {
        return $this->nomEt;
    }

    /**
     * Set pnomEt
     *
     * @param string $pnomEt
     * @return EspEtudiant
     */
    public function setPnomEt($pnomEt)
    {
        $this->pnomEt = $pnomEt;
    
        return $this;
    }

    /**
     * Get pnomEt
     *
     * @return string 
     */
    public function getPnomEt()
    {
        return $this->pnomEt;
    }

    /**
     * Set dateNaisEt
     *
     * @param \DateTime $dateNaisEt
     * @return EspEtudiant
     */
    public function setDateNaisEt($dateNaisEt)
    {
        $this->dateNaisEt = $dateNaisEt;
    
        return $this;
    }

    /**
     * Get dateNaisEt
     *
     * @return \DateTime 
     */
    public function getDateNaisEt()
    {
        return $this->dateNaisEt;
    }

    /**
     * Set lieuNaisEt
     *
     * @param string $lieuNaisEt
     * @return EspEtudiant
     */
    public function setLieuNaisEt($lieuNaisEt)
    {
        $this->lieuNaisEt = $lieuNaisEt;
    
        return $this;
    }

    /**
     * Get lieuNaisEt
     *
     * @return string 
     */
    public function getLieuNaisEt()
    {
        return $this->lieuNaisEt;
    }

    /**
     * Set natureEt
     *
     * @param string $natureEt
     * @return EspEtudiant
     */
    public function setNatureEt($natureEt)
    {
        $this->natureEt = $natureEt;
    
        return $this;
    }

    /**
     * Get natureEt
     *
     * @return string 
     */
    public function getNatureEt()
    {
        return $this->natureEt;
    }

    /**
     * Set fonctionEt
     *
     * @param string $fonctionEt
     * @return EspEtudiant
     */
    public function setFonctionEt($fonctionEt)
    {
        $this->fonctionEt = $fonctionEt;
    
        return $this;
    }

    /**
     * Get fonctionEt
     *
     * @return string 
     */
    public function getFonctionEt()
    {
        return $this->fonctionEt;
    }

    /**
     * Set adresseEt
     *
     * @param string $adresseEt
     * @return EspEtudiant
     */
    public function setAdresseEt($adresseEt)
    {
        $this->adresseEt = $adresseEt;
    
        return $this;
    }

    /**
     * Get adresseEt
     *
     * @return string 
     */
    public function getAdresseEt()
    {
        return $this->adresseEt;
    }
    /**
     * Add inscriptions
     *
     * @param \Esprit\SeminaireBundle\Entity\InscritSemin $inscriptions
     * @return EspEtudiant
     */
    public function addInscription(\Esprit\SeminaireBundle\Entity\InscritSemin $inscriptions)
    {
        $this->inscriptions[] = $inscriptions;
    
        return $this;
    }

    /**
     * Remove inscriptions
     *
     * @param \Esprit\SeminaireBundle\Entity\InscritSemin $inscriptions
     */
    public function removeInscription(\Esprit\SeminaireBundle\Entity\InscritSemin $inscriptions)
    {
        $this->inscriptions->removeElement($inscriptions);
    }

    /**
     * Get inscriptions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInscriptions()
    {
        return $this->inscriptions;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->inscriptions = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set id
     *
     * @param string $id
     * @return EspEtudiant
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }
    
    public function __toString() {
        return $this->getId();
    }

    /**
     * Set encadrement
     *
     * @param \Esprit\UserBundle\Entity\EspEnseignant $encadrement
     * @return EspEtudiant
     */
    public function setEncadrement(\Esprit\UserBundle\Entity\EspEnseignant $encadrement = null)
    {
        $this->encadrement = $encadrement;
    
        return $this;
    }

    /**
     * Get encadrement
     *
     * @return \Esprit\UserBundle\Entity\EspEnseignant 
     */
    public function getEncadrement()
    {
        return $this->encadrement;
    }

    /**
     * Set fichepfe
     *
     * @param \Esprit\EnseignantBundle\Entity\EspFichePfe $fichepfe
     * @return EspEtudiant
     */
    public function setFichepfe(\Esprit\EnseignantBundle\Entity\EspFichePfe $fichepfe = null)
    {
        $this->fichepfe = $fichepfe;
    
        return $this;
    }

    /**
     * Get fichepfe
     *
     * @return \Esprit\EnseignantBundle\Entity\EspFichePfe 
     */
    public function getFichepfe()
    {
        return $this->fichepfe;
    }

    /**
     * Add absences
     *
     * @param \Esprit\EnseignantBundle\Entity\Absence $absences
     * @return EspEtudiant
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
     * Set classe
     *
     * @param \Esprit\EnseignantBundle\Entity\Classe $classe
     * @return EspEtudiant
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
}