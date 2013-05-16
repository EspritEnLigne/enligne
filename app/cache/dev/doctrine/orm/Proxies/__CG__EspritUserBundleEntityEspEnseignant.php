<?php

namespace Proxies\__CG__\Esprit\UserBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class EspEnseignant extends \Esprit\UserBundle\Entity\EspEnseignant implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
    }

    public function setNomEns($nomEns)
    {
        $this->__load();
        return parent::setNomEns($nomEns);
    }

    public function getNomEns()
    {
        $this->__load();
        return parent::getNomEns();
    }

    public function setTypeEns($typeEns)
    {
        $this->__load();
        return parent::setTypeEns($typeEns);
    }

    public function getTypeEns()
    {
        $this->__load();
        return parent::getTypeEns();
    }

    public function setDateRec($dateRec)
    {
        $this->__load();
        return parent::setDateRec($dateRec);
    }

    public function getDateRec()
    {
        $this->__load();
        return parent::getDateRec();
    }

    public function setNiveau($niveau)
    {
        $this->__load();
        return parent::setNiveau($niveau);
    }

    public function getNiveau()
    {
        $this->__load();
        return parent::getNiveau();
    }

    public function setDateSaisie($dateSaisie)
    {
        $this->__load();
        return parent::setDateSaisie($dateSaisie);
    }

    public function getDateSaisie()
    {
        $this->__load();
        return parent::getDateSaisie();
    }

    public function setDateDernModif($dateDernModif)
    {
        $this->__load();
        return parent::setDateDernModif($dateDernModif);
    }

    public function getDateDernModif()
    {
        $this->__load();
        return parent::getDateDernModif();
    }

    public function setEtat($etat)
    {
        $this->__load();
        return parent::setEtat($etat);
    }

    public function getEtat()
    {
        $this->__load();
        return parent::getEtat();
    }

    public function setObservation($observation)
    {
        $this->__load();
        return parent::setObservation($observation);
    }

    public function getObservation()
    {
        $this->__load();
        return parent::getObservation();
    }

    public function setPwdEns($pwdEns)
    {
        $this->__load();
        return parent::setPwdEns($pwdEns);
    }

    public function getPwdEns()
    {
        $this->__load();
        return parent::getPwdEns();
    }

    public function setCivilite($civilite)
    {
        $this->__load();
        return parent::setCivilite($civilite);
    }

    public function getCivilite()
    {
        $this->__load();
        return parent::getCivilite();
    }

    public function setCin($cin)
    {
        $this->__load();
        return parent::setCin($cin);
    }

    public function getCin()
    {
        $this->__load();
        return parent::getCin();
    }

    public function setCnss($cnss)
    {
        $this->__load();
        return parent::setCnss($cnss);
    }

    public function getCnss()
    {
        $this->__load();
        return parent::getCnss();
    }

    public function setTel1($tel1)
    {
        $this->__load();
        return parent::setTel1($tel1);
    }

    public function getTel1()
    {
        $this->__load();
        return parent::getTel1();
    }

    public function setTel2($tel2)
    {
        $this->__load();
        return parent::setTel2($tel2);
    }

    public function getTel2()
    {
        $this->__load();
        return parent::getTel2();
    }

    public function setDatenaissance($datenaissance)
    {
        $this->__load();
        return parent::setDatenaissance($datenaissance);
    }

    public function getDatenaissance()
    {
        $this->__load();
        return parent::getDatenaissance();
    }

    public function setDatentree($datentree)
    {
        $this->__load();
        return parent::setDatentree($datentree);
    }

    public function getDatentree()
    {
        $this->__load();
        return parent::getDatentree();
    }

    public function setDatesortie($datesortie)
    {
        $this->__load();
        return parent::setDatesortie($datesortie);
    }

    public function getDatesortie()
    {
        $this->__load();
        return parent::getDatesortie();
    }

    public function addAbsencelist(\Esprit\EnseignantBundle\Entity\AbsenceList $absencelist)
    {
        $this->__load();
        return parent::addAbsencelist($absencelist);
    }

    public function removeAbsencelist(\Esprit\EnseignantBundle\Entity\AbsenceList $absencelist)
    {
        $this->__load();
        return parent::removeAbsencelist($absencelist);
    }

    public function getAbsencelist()
    {
        $this->__load();
        return parent::getAbsencelist();
    }

    public function addAbsence(\Esprit\EnseignantBundle\Entity\Absence $absences)
    {
        $this->__load();
        return parent::addAbsence($absences);
    }

    public function removeAbsence(\Esprit\EnseignantBundle\Entity\Absence $absences)
    {
        $this->__load();
        return parent::removeAbsence($absences);
    }

    public function getAbsences()
    {
        $this->__load();
        return parent::getAbsences();
    }

    public function addMatiere(\Esprit\EnseignantBundle\Entity\Matiere $matieres)
    {
        $this->__load();
        return parent::addMatiere($matieres);
    }

    public function removeMatiere(\Esprit\EnseignantBundle\Entity\Matiere $matieres)
    {
        $this->__load();
        return parent::removeMatiere($matieres);
    }

    public function getMatieres()
    {
        $this->__load();
        return parent::getMatieres();
    }

    public function addClasse(\Esprit\EnseignantBundle\Entity\Classe $classes)
    {
        $this->__load();
        return parent::addClasse($classes);
    }

    public function removeClasse(\Esprit\EnseignantBundle\Entity\Classe $classes)
    {
        $this->__load();
        return parent::removeClasse($classes);
    }

    public function getClasses()
    {
        $this->__load();
        return parent::getClasses();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function addCursu(\Esprit\UserBundle\Entity\EspEnseignant $cursus)
    {
        $this->__load();
        return parent::addCursu($cursus);
    }

    public function removeCursu(\Esprit\UserBundle\Entity\EspEnseignant $cursus)
    {
        $this->__load();
        return parent::removeCursu($cursus);
    }

    public function getCursus()
    {
        $this->__load();
        return parent::getCursus();
    }

    public function addEncadrement(\Esprit\UserBundle\Entity\EspEtudiant $encadrement)
    {
        $this->__load();
        return parent::addEncadrement($encadrement);
    }

    public function removeEncadrement(\Esprit\UserBundle\Entity\EspEtudiant $encadrement)
    {
        $this->__load();
        return parent::removeEncadrement($encadrement);
    }

    public function getEncadrement()
    {
        $this->__load();
        return parent::getEncadrement();
    }

    public function addConge(\Esprit\UserBundle\Entity\EspConges $conges)
    {
        $this->__load();
        return parent::addConge($conges);
    }

    public function removeConge(\Esprit\UserBundle\Entity\EspConges $conges)
    {
        $this->__load();
        return parent::removeConge($conges);
    }

    public function getConges()
    {
        $this->__load();
        return parent::getConges();
    }

    public function addProjetrdi(\Esprit\UserBundle\Entity\ProjetRdi $projetrdi)
    {
        $this->__load();
        return parent::addProjetrdi($projetrdi);
    }

    public function removeProjetrdi(\Esprit\UserBundle\Entity\ProjetRdi $projetrdi)
    {
        $this->__load();
        return parent::removeProjetrdi($projetrdi);
    }

    public function getProjetrdi()
    {
        $this->__load();
        return parent::getProjetrdi();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nomEns', 'typeEns', 'civilite', 'cin', 'cnss', 'tel1', 'tel2', 'datenaissance', 'datentree', 'datesortie', 'dateRec', 'niveau', 'dateSaisie', 'dateDernModif', 'etat', 'observation', 'pwdEns', 'absencelist', 'absences', 'matieres', 'classes', 'cursus', 'conges', 'encadrement', 'projetrdi');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}