<?php

namespace Esprit\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * EspEnseignant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Esprit\UserBundle\Entity\EspEnseignantRepository")
 */
class EspEnseignant
{
            /**
     * @ORM\OneToMany(targetEntity="Esprit\EnseignantBundle\Entity\Absencelist", mappedBy="enseignant", cascade={"persist"})
     */
    private $absencelist;

    
        /**
     * @ORM\OneToMany(targetEntity="Esprit\EnseignantBundle\Entity\Absence", mappedBy="enseignant",cascade={"persist"})
     */
    private $absences;

        /**
     * @ORM\ManyToMany(targetEntity="Esprit\EnseignantBundle\Entity\Matiere", cascade={"persist"})
     */
    private $matieres;

    /**
     * @ORM\ManyToMany(targetEntity="Esprit\EnseignantBundle\Entity\Classe", inversedBy="enseignants")
     * @ORM\JoinTable(name="affectation")
     * */
    private $classes;

    
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
     * @ORM\Column(name="id_ens", type="string", length=10)
     */
    private $idEns;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ens", type="string", length=30)
     */
    private $nomEns;

    /**
     * @var string
     *
     * @ORM\Column(name="type_ens", type="string", length=1)
     */
    private $typeEns;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rec", type="date")
     */
    private $dateRec;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=2)
     */
    private $niveau;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_saisie", type="date")
     */
    private $dateSaisie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_dern_modif", type="date")
     */
    private $dateDernModif;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=1)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=300)
     */
    private $observation;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd_ens", type="string", length=10)
     */
    private $pwdEns;

    
    
    /**
     * @ORM\OneToMany(targetEntity="EspTacheRdi", mappedBy="ensesp")
     */
    private $cursus;
    /**
     * @ORM\ManyToMany(targetEntity="Esprit\EnseignantBundle\Entity\EspRdi", mappedBy="ens")
     * @ORM\JoinTable(name="ens_rdi")
     */
    private $prdi;
    
    public function __construct() {
        $this->prdi = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cursus = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set idEns
     *
     * @param string $idEns
     * @return EspEnseignant
     */
    public function setIdEns($idEns)
    {
        $this->idEns = $idEns;
    
        return $this;
    }

    /**
     * Get idEns
     *
     * @return string 
     */
    public function getIdEns()
    {
        return $this->idEns;
    }

    /**
     * Set nomEns
     *
     * @param string $nomEns
     * @return EspEnseignant
     */
    public function setNomEns($nomEns)
    {
        $this->nomEns = $nomEns;
    
        return $this;
    }

    /**
     * Get nomEns
     *
     * @return string 
     */
    public function getNomEns()
    {
        return $this->nomEns;
    }

    /**
     * Set typeEns
     *
     * @param string $typeEns
     * @return EspEnseignant
     */
    public function setTypeEns($typeEns)
    {
        $this->typeEns = $typeEns;
    
        return $this;
    }

    /**
     * Get typeEns
     *
     * @return string 
     */
    public function getTypeEns()
    {
        return $this->typeEns;
    }

    /**
     * Set dateRec
     *
     * @param \DateTime $dateRec
     * @return EspEnseignant
     */
    public function setDateRec($dateRec)
    {
        $this->dateRec = $dateRec;
    
        return $this;
    }

    /**
     * Get dateRec
     *
     * @return \DateTime 
     */
    public function getDateRec()
    {
        return $this->dateRec;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return EspEnseignant
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    
        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set dateSaisie
     *
     * @param \DateTime $dateSaisie
     * @return EspEnseignant
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
     * Set dateDernModif
     *
     * @param \DateTime $dateDernModif
     * @return EspEnseignant
     */
    public function setDateDernModif($dateDernModif)
    {
        $this->dateDernModif = $dateDernModif;
    
        return $this;
    }

    /**
     * Get dateDernModif
     *
     * @return \DateTime 
     */
    public function getDateDernModif()
    {
        return $this->dateDernModif;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return EspEnseignant
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set observation
     *
     * @param string $observation
     * @return EspEnseignant
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;
    
        return $this;
    }

    /**
     * Get observation
     *
     * @return string 
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set pwdEns
     *
     * @param string $pwdEns
     * @return EspEnseignant
     */
    public function setPwdEns($pwdEns)
    {
        $this->pwdEns = $pwdEns;
    
        return $this;
    }

    /**
     * Get pwdEns
     *
     * @return string 
     */
    public function getPwdEns()
    {
        return $this->pwdEns;
    }

    /**
     * Add cursus
     *
     * @param \Esprit\UserBundle\Entity\EspTacheRdi $cursus
     * @return EspEnseignant
     */
    public function addCursu(\Esprit\UserBundle\Entity\EspTacheRdi $cursus)
    {
        $this->cursus[] = $cursus;
    
        return $this;
    }

    /**
     * Remove cursus
     *
     * @param \Esprit\UserBundle\Entity\EspTacheRdi $cursus
     */
    public function removeCursu(\Esprit\UserBundle\Entity\EspTacheRdi $cursus)
    {
        $this->cursus->removeElement($cursus);
    }

    /**
     * Get cursus
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCursus()
    {
        return $this->cursus;
    }

    /**
     * Add prdi
     *
     * @param \Esprit\EnseignantBundle\Entity\EspRdi $prdi
     * @return EspEnseignant
     */
    public function addPrdi(\Esprit\EnseignantBundle\Entity\EspRdi $prdi)
    {
        $this->prdi[] = $prdi;
    
        return $this;
    }

    /**
     * Remove prdi
     *
     * @param \Esprit\EnseignantBundle\Entity\EspRdi $prdi
     */
    public function removePrdi(\Esprit\EnseignantBundle\Entity\EspRdi $prdi)
    {
        $this->prdi->removeElement($prdi);
    }

    /**
     * Get prdi
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrdi()
    {
        return $this->prdi;
    }

    /**
     * Add absencelist
     *
     * @param \Esprit\EnseignantBundle\Entity\Absencelist $absencelist
     * @return EspEnseignant
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
     * Add absences
     *
     * @param \Esprit\EnseignantBundle\Entity\Absence $absences
     * @return EspEnseignant
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
     * Add matieres
     *
     * @param \Esprit\EnseignantBundle\Entity\Matiere $matieres
     * @return EspEnseignant
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

    /**
     * Add classes
     *
     * @param \Esprit\EnseignantBundle\Entity\Classe $classes
     * @return EspEnseignant
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
}