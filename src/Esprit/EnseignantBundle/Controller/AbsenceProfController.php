<?php

namespace Esprit\EnseignantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Esprit\EnseignantBundle\Entity\Absence;
use Symfony\Component\HttpFoundation\Response;

class AbsenceProfController extends Controller {

    public function indexAction($name) {
        return $this->render('EspritEnseignantBundle:Default:index.html.twig', array('name' => $name));
    }

//________________________________________Ajouter Absence_______________________________________________

    public function ajouterAbsenceAction() {
//        $em = $this->getDoctrine()->getManager();
//        $classes = $em->getRepository('EspritEnseignantBundle:Classe')->listClasse($idprof);
//        $listClasses = "";
//        $listClasses .= '<option value=""></option>';
//        for ($i = 0; $i < count($classes); $i++) {
//            $id = $classes[$i]['ID'];
//            $libelle = $classes[$i]['LIBELLE'];
//            $listClasses .= '<option value="' . $id . '">' . $libelle . '</option>';
//        } , array('classes' => $listClasses)
        return $this->render('EspritEnseignantBundle:Absence:ajouterAbsence.html.twig'
        );
    }

    public function getMatiereAction() {
        $request = $this->container->get('request');
        $classe = $request->get('classe');

        $em = $this->getDoctrine()->getManager();
        $matieres = $em->getRepository('EspritEnseignantBundle:Matiere')->listMatiere($classe);

        $listMatieres = "";
        $listMatieres .= '<option value=""></option>';
        for ($i = 0; $i < count($matieres); $i++) {
            $id = $matieres[$i]['ID'];
            $libelle = $matieres[$i]['LIBELLE'];
            $listMatieres .= '<option value="' . $id . '">' . $libelle . '</option>';
        }
        $etudiants = $em->getRepository('EspritUserBundle:EspEtudiant')->findByclasse($classe);

        $chaine1 = "";
        $chaine1 .='<table class="table table-striped table-condensed table-hover" style="width: 80%; margin-left: 10%;">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Absence <a href="javascript:checkCases(true)">Cocher</a> / <a href="javascript:checkCases(false)">Décocher</a></p></th>  
            </tr>
        </thead>
        <tbody>';
        $i = 0;
        foreach ($etudiants as $etud) {
            $idet = $etud->getId();
            $nom = $etud->getNomEt();
            $prenom = $etud->getPnomEt();
            $i = $i + 1;
            $chaine1 .= '<tr id="table">
                <td>' . $nom . '</td>
                <td>' . $prenom . '</td>
                <td id="cases">
                <input type="checkbox" name="absence" value="" id="absent' . $i . '">
                </td>
                <td id="idEtud' . $i . '" style="display:none;">' . $idet . '</td>
';
        }

        $response = new Response(json_encode(array('listMatieres' => $listMatieres, 'chaine1' => $chaine1, 'i' => $i)));
        return $response;
    }

    public function getClasseAction() {
        $em = $this->getDoctrine()->getManager();
        $idprof = $this->get('security.context')->getToken()->getUser()->getIdentifiant();
        $classes = $em->getRepository('EspritEnseignantBundle:Classe')->listClasse($idprof);
        
        $listClasses = "";
        $listClasses .= '<option value=""></option>';
        for ($i = 0; $i < count($classes); $i++) {
            $id = $classes[$i]['ID'];
            $libelle = $classes[$i]['LIBELLE'];
            $listClasses .= '<option value="' . $id . '">' . $libelle . '</option>';
        }

        $response = new Response(json_encode(array('classes' => $listClasses)));
        return $response;
    }

    public function validerAbsenceAction() {
        $request = $this->container->get('request');
        $classe = $request->get('classe');
        $matiere = $request->get('matiere');
        $date = $request->get('date');
        $etudiants = $request->get('etudiants');
        $heure = $request->get('heure');
        $idprof = $this->get('security.context')->getToken()->getUser()->getIdentifiant();

        $em = $this->getDoctrine()->getManager();
        $matiereAb = $em->getRepository('EspritEnseignantBundle:Matiere')->find($matiere);
        $classeAb = $em->getRepository('EspritEnseignantBundle:Classe')->find($classe);
        $enseignant = $em->getRepository('EspritUserBundle:EspEnseignant')->find($idprof);


        $i = "";

        foreach ($etudiants as $et) {
            //$i=$i+1;
            $etudiant = $em->getRepository('EspritUserBundle:EspEtudiant')->find($et);
            $Absence = new Absence();
            $Absence->setClasse($classeAb);
            $Absence->setMatiere($matiereAb);
            $Absence->setEtudiant($etudiant);
            $Absence->setDateSaisie(new \DateTime($date));
            $Absence->setHeureAbsence($heure);
            $Absence->setEnseignant($enseignant);
            $em->persist($Absence);
            $em->flush();
            $i .="ok";
        }

        $response = new Response(json_encode(array('i' => $i)));
        return $response;
    }

    //________________________________________Modifier Absence_______________________________________________

    public function modifierAbsenceAction() {
        $em = $this->getDoctrine()->getManager();
        $classes = $em->getRepository('EspritEnseignantBundle:Classe')->findAll();

        return $this->render('EspritEnseignantBundle:Absence:modifierAbsence.html.twig', array('classes' => $classes)
        );
    }

    public function getAbsenceAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $classe = $request->get('classe');
        $matiere = $request->get('matiere');
        $date = new \DateTime($request->get('date'));
        //$etudiants = $request->get('etudiants');
        $heure = $request->get('heure');
        $idprof = $this->get('security.context')->getToken()->getUser()->getIdentifiant();

        $absences = $em->getRepository('EspritEnseignantBundle:Absence')->findBy(array('classe' => $classe, 'matiere' => $matiere, 'enseignant' => $idprof, 'dateSaisie' => $date, 'heureAbsence' => $heure));
//        echo count($absences);
//        exit;
        //etudiants de la classe selectionné
        $etudiants = $em->getRepository('EspritUserBundle:EspEtudiant')->findByclasse($classe);
        ////______________________________________
        //liste des id des etudiants absents
        $etudiantAbsent = array();
        $i = 0;
        foreach ($absences as $abs) {

            //$etudiant=$em->getRepository('EspritUserBundle:EspEtudiant')->find($abs->getEtudiant()->getId());
            $etudiantAbsent[$i] = $abs->getEtudiant()->getId();
            $i++;
        }

        //___________________________________

        $chaine1 = "";
        $chaine1 .='<table class="table table-striped table-condensed table-hover" style="width: 80%; margin-left: 10%;">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Absence <a href="javascript:checkCases(true)">Cocher</a> / <a href="javascript:checkCases(false)">Décocher</a></p></th>
            </tr>
        </thead>
        <tbody>';
        $id = 0;
        foreach ($etudiants as $etud) {
            $idet = $etud->getId();
            $nom = $etud->getNomEt();
            $prenom = $etud->getPnomEt();
            $id = $id + 1;
            $chaine1 .= '<tr id="table">
                <td>' . $nom . '</td>
                <td>' . $prenom . '</td>
                <td id="cases">
                <input type="checkbox" name="absence" value="" id="absent' . $id . '">
                </td>
                <td id="idEtud' . $id . '" style="display:none;">' . $idet . '</td>
';
        }
        $response = new Response(json_encode(array('listEtudiants' => $chaine1, 'i' => $id, 'etudiantAbsents' => $etudiantAbsent)));
        return $response;
    }

    public function validerModifierAbsenceAction() {
        $request = $this->container->get('request');
        $classe = $request->get('classe');
        $matiere = $request->get('matiere');
        $date = new \DateTime($request->get('date'));
        $etudiantsAbsent = $request->get('etudiantsAbsent');
        $etudiantsPresent = $request->get('etudiantsPresent');
        $heure = $request->get('heure');
        $idprof = $this->get('security.context')->getToken()->getUser()->getIdentifiant();

        $em = $this->getDoctrine()->getManager();

        //$etudiantClasse = $em->getRepository('EspritUserBundle:EspEtudiant')->listEtudiant($classe); //toutes les etudiants de la classe



        $matiereAb = $em->getRepository('EspritEnseignantBundle:Matiere')->find($matiere);
        $classeAb = $em->getRepository('EspritEnseignantBundle:Classe')->find($classe);
        $enseignant = $em->getRepository('EspritUserBundle:EspEnseignant')->find($idprof);

        $etud = array();
//for($i=0;$i<count($etudiantsAbsent);$i++){
//    echo $etudiantsAbsent[$i];
//}
//exit;
        $i = "";
        if (!$etudiantsAbsent) {
            foreach ($etudiantsPresent as $p) {
                $Absence = $em->getRepository('EspritEnseignantBundle:Absence')->findOneBy(array('etudiant' => $p));
                if($Absence!=Null){
                $em->remove($Absence);
                $em->flush();
                }
            }
            $i .= "tout est present";
        } elseif (!$etudiantsPresent) {
            for ($i = 0; $i < count($etudiantsAbsent); $i++) {
                $Absence = $em->getRepository('EspritEnseignantBundle:Absence')->findOneBy(array('etudiant' => $etudiantsAbsent[$i]));
                if (!$Absence) {
                    $etud[$i] = $etudiantsAbsent[$i];
                } else {
                    foreach ($Absence as $abs) {
                        $abs->setClasse($classeAb);
                        $abs->setMatiere($matiereAb);
                        //$Absence->setEtudiant($etudiant);
                        $abs->setDateSaisie($date);
                        $abs->setHeureAbsence($heure);
                        $abs->setEnseignant($enseignant);
                        $em->persist($abs);
                        $em->flush();
                    }
                }
            }
            foreach ($etud as $et) {
                //$i=$i+1;
                $etudiant = $em->getRepository('EspritUserBundle:EspEtudiant')->find($et);
                $abs = new Absence();
                $abs->setClasse($classeAb);
                $abs->setMatiere($matiereAb);
                $abs->setEtudiant($etudiant);
                $abs->setDateSaisie($date);
                $abs->setHeureAbsence($heure);
                $abs->setEnseignant($enseignant);
                $em->persist($abs);
                $em->flush();
            }
            $i .="tout est absent";
        } else {
            foreach ($etudiantsPresent as $P) {
                $Absence = $em->getRepository('EspritEnseignantBundle:Absence')->findOneBy(array('etudiant' => $P));
                //foreach ($Absence as $abs) {
                if($Absence!=Null){
                $em->remove($Absence);
                $em->flush();
                }
            }
            foreach ($etudiantsAbsent as $A) {
                $abs = $em->getRepository('EspritEnseignantBundle:Absence')->findOneBy(array('etudiant' => $A));
                //foreach ($Absence as $abs) {
                $abs->setClasse($classeAb);
                $abs->setMatiere($matiereAb);
                //$Absence->setEtudiant($etudiant);
                $abs->setDateSaisie($date);
                $abs->setHeureAbsence($heure);
                $abs->setEnseignant($enseignant);
                $em->persist($abs);
                $em->flush();
                //}
            }
            $i .= count($etudiantsAbsent) . " etudiants absents et " . count($etudiantsPresent);
        }
        $response = new Response(json_encode(array('i' => $i)));
        return $response;
    }

//________________________________________Fiche de Presence_______________________________________________


    public function fichePresenceAction() {
        $em = $this->getDoctrine()->getManager();
        $classes = $em->getRepository('EspritEnseignantBundle:Classe')->findAll();

        return $this->render('EspritEnseignantBundle:Absence:fichePresence.html.twig', array('classes' => $classes)
        );
    }

    public function getMatiereFicheAction() {
        $request = $this->container->get('request');
        $classe = $request->get('classe');

        $em = $this->getDoctrine()->getManager();
        $matieres = $em->getRepository('EspritEnseignantBundle:Matiere')->listMatiere($classe);

        $listMatieres = "";
        $listMatieres .= '<option value=""></option>';
        for ($i = 0; $i < count($matieres); $i++) {
            $id = $matieres[$i]['ID'];
            $libelle = $matieres[$i]['LIBELLE'];
            $listMatieres .= '<option value="' . $id . '">' . $libelle . '</option>';
        }
        $response = new Response(json_encode(array('list' => $listMatieres)));
        return $response;
    }

    public function getFicheAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $classe = $request->get('classe');
        $matiere = $request->get('matiere');
        $etudiants = $em->getRepository('EspritUserBundle:EspEtudiant')->findByclasse($classe);
        $idprof = $this->get('security.context')->getToken()->getUser()->getIdentifiant();

        $absences = $em->getRepository('EspritEnseignantBundle:Absence')->findBy(array('classe' => $classe, 'matiere' => $matiere, 'enseignant' => $idprof),array('dateSaisie'=>'ASC'));

        $etudiantAbsent = array(); //tableau contient les id des etudiants absents
        $i = 0;
        foreach ($absences as $abs) {

            //$etudiant=$em->getRepository('EspritUserBundle:EspEtudiant')->find($abs->getEtudiant()->getId());
            $etudiantAbsent[$i] = $abs->getEtudiant()->getId();
            $i++;
        }

        $fiche = "";
//        $h="";
        $fiche .='<table class="table table-striped table-condensed table-hover" style="width: 80%; margin-left: 10%;">
        <thead>
            <tr>
                <th> Nom Prenom </th>'; //date("Y-m-d",strtotime($abs->getDateSaisie()))
        foreach ($absences as $abs) {
            $fiche .='<th>' . $abs->getDateSaisie()->format('d.m.y') . '</th>';
        }
        $fiche .='</tr>
        </thead>
        <tbody>';
        //$fiche .='';
        foreach ($etudiants as $etud){
            $fiche .='<tr><td>'. $etud->getNomEt().' '.$etud->getNomEt().'<td>';
                
        }
        foreach ($absences as $abs) {
            $fiche .='<td>etat d\'absence</td>';
        }
        $fiche .='</tr>
        </tbody>
        </table>';

        $response = new Response(json_encode(array('fiche' => $fiche)));
        return $response;
    }

}
