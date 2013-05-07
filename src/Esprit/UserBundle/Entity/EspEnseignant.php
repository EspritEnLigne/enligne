<?php

namespace Esprit\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EspEnseignant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Esprit\UserBundle\Entity\EspEnseignantRepository")
 */
class EspEnseignant
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
    /////////////////////////////////////////////////////////////////
     /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", length=255)
     */
    private $civilite;
     /**
     * @var string
     *
     * @ORM\Column(name="cin", type="integer")
     */
    private $cin;
     /**
     * @var string
     *
     * @ORM\Column(name="cnss", type="string", length=255)
     */
    private $cnss;
     /**
     * @var string
     *
     * @ORM\Column(name="tel1", type="integer")
     */
    private $tel1;
     /**
     * @var string
     *
     * @ORM\Column(name="tel2", type="integer")
     */
    private $tel2;
     /**
     * @var string
     *
     * @ORM\Column(name="datenaissance", type="date")
     */
    private $datenaissance;
     /**
     * @var string
     *
     * @ORM\Column(name="datentree", type="date")
     */
    private $datentree;
     /**
     * @var string
     *
     * @ORM\Column(name="datesortie", type="date")
     */
    private $datesortie;
    ////////////////////////////////////////////////////////////
    

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
     * @ORM\OneToMany(targetEntity="EspCursus" ,mappedBy="espens")
     */
    private $cursus;
    /**
     * @ORM\OneToMany(targetEntity="EspConges" ,mappedBy="espconges")
     */
    private $conges;
    /**
     * @ORM\OneToMany(targetEntity="EspEtudiant" ,mappedBy="espens")
     */
    private $encadrement;
    /**
     * @ORM\OneToMany(targetEntity="ProjetRdi" ,mappedBy="espens")
     */
    private $projetrdi;
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
     * Set civilite
     *
     * @param string $civilite
     * @return EspEnseignant
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;
    
        return $this;
    }

    /**
     * Get civilite
     *
     * @return string 
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set cin
     *
     * @param integer $cin
     * @return EspEnseignant
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    
        return $this;
    }

    /**
     * Get cin
     *
     * @return integer 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set cnss
     *
     * @param string $cnss
     * @return EspEnseignant
     */
    public function setCnss($cnss)
    {
        $this->cnss = $cnss;
    
        return $this;
    }

    /**
     * Get cnss
     *
     * @return string 
     */
    public function getCnss()
    {
        return $this->cnss;
    }

    /**
     * Set tel1
     *
     * @param integer $tel1
     * @return EspEnseignant
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;
    
        return $this;
    }

    /**
     * Get tel1
     *
     * @return integer 
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set tel2
     *
     * @param integer $tel2
     * @return EspEnseignant
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;
    
        return $this;
    }

    /**
     * Get tel2
     *
     * @return integer 
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     * @return EspEnseignant
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;
    
        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime 
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set datentree
     *
     * @param \DateTime $datentree
     * @return EspEnseignant
     */
    public function setDatentree($datentree)
    {
        $this->datentree = $datentree;
    
        return $this;
    }

    /**
     * Get datentree
     *
     * @return \DateTime 
     */
    public function getDatentree()
    {
        return $this->datentree;
    }

    /**
     * Set datesortie
     *
     * @param \DateTime $datesortie
     * @return EspEnseignant
     */
    public function setDatesortie($datesortie)
    {
        $this->datesortie = $datesortie;
    
        return $this;
    }

    /**
     * Get datesortie
     *
     * @return \DateTime 
     */
    public function getDatesortie()
    {
        return $this->datesortie;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    
    /**
     * Add cursus
     *
     * @param \Esprit\UserBundle\Entity\EspEnseignant $cursus
     * @return EspEnseignant
     */
    public function addCursu(\Esprit\UserBundle\Entity\EspEnseignant $cursus)
    {
        $this->cursus[] = $cursus;
    
        return $this;
    }

    /**
     * Remove cursus
     *
     * @param \Esprit\UserBundle\Entity\EspEnseignant $cursus
     */
    public function removeCursu(\Esprit\UserBundle\Entity\EspEnseignant $cursus)
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
     * Add encadrement
     *
     * @param \Esprit\UserBundle\Entity\EspEtudiant $encadrement
     * @return EspEnseignant
     */
    public function addEncadrement(\Esprit\UserBundle\Entity\EspEtudiant $encadrement)
    {
        $this->encadrement[] = $encadrement;
    
        return $this;
    }

    /**
     * Remove encadrement
     *
     * @param \Esprit\UserBundle\Entity\EspEtudiant $encadrement
     */
    public function removeEncadrement(\Esprit\UserBundle\Entity\EspEtudiant $encadrement)
    {
        $this->encadrement->removeElement($encadrement);
    }

    /**
     * Get encadrement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEncadrement()
    {
        return $this->encadrement;
    }

    /**
     * Add conges
     *
     * @param \Esprit\UserBundle\Entity\EspConges $conges
     * @return EspEnseignant
     */
    public function addConge(\Esprit\UserBundle\Entity\EspConges $conges)
    {
        $this->conges[] = $conges;
    
        return $this;
    }

    /**
     * Remove conges
     *
     * @param \Esprit\UserBundle\Entity\EspConges $conges
     */
    public function removeConge(\Esprit\UserBundle\Entity\EspConges $conges)
    {
        $this->conges->removeElement($conges);
    }

    /**
     * Get conges
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConges()
    {
        return $this->conges;
    }

    /**
     * Add projetrdi
     *
     * @param \Esprit\UserBundle\Entity\ProjetRdi $projetrdi
     * @return EspEnseignant
     */
    public function addProjetrdi(\Esprit\UserBundle\Entity\ProjetRdi $projetrdi)
    {
        $this->projetrdi[] = $projetrdi;
    
        return $this;
    }

    /**
     * Remove projetrdi
     *
     * @param \Esprit\UserBundle\Entity\ProjetRdi $projetrdi
     */
    public function removeProjetrdi(\Esprit\UserBundle\Entity\ProjetRdi $projetrdi)
    {
        $this->projetrdi->removeElement($projetrdi);
    }

    /**
     * Get projetrdi
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjetrdi()
    {
        return $this->projetrdi;
    }
}