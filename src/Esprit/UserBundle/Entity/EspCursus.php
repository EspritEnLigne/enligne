<?php

namespace Esprit\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EspCursus
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Esprit\UserBundle\Entity\EspCursusRepository")
 */
class EspCursus
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="date")
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="date")
     */
    private $datefin;
    /**
     * @ORM\ManyToOne(targetEntity="EspEnseignant" , inversedBy="cursus")
     * @ORM\JoinColumn(name="ens_id", referencedColumnName="id_ens")
     */
    private $espens;

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
     * @return EspCursus
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
     * Set type
     *
     * @param string $type
     * @return EspCursus
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return EspCursus
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    
        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return EspCursus
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    
        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }


    /**
     * Set espens
     *
     * @param \Esprit\UserBundle\Entity\EspEnseignant $espens
     * @return EspCursus
     */
    public function setEspens(\Esprit\UserBundle\Entity\EspEnseignant $espens = null)
    {
        $this->espens = $espens;
    
        return $this;
    }

    /**
     * Get espens
     *
     * @return \Esprit\UserBundle\Entity\EspEnseignant 
     */
    public function getEspens()
    {
        return $this->espens;
    }
}