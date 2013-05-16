<?php

namespace Esprit\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Esprit\UserBundle\Entity\EspEtudiant;
use Esprit\UserBundle\Form\EspEtudiantType;

/**
 * EspEtudiant controller.
 *
 */
class EspEtudiantController extends Controller
{
    /**
     * Lists all EspEtudiant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritUserBundle:EspEtudiant')->findAll();

        return $this->render('EspritUserBundle:EspEtudiant:index.html.twig', array(
            'entities' => $entities,
        ));
    }
 /**
     * Lists all EspEtudiant entities.
     *
     */
    public function listByClasseAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritUserBundle:EspEtudiant')->findByclasse($id);

        return $this->render('EspritUserBundle:EspEtudiant:listebyclasse.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Lists all EspEtudiant entities.
     *
     */
    public function ficheAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritEnseignantBundle:Classe')->findAll();

        return $this->render('EspritEnseignantBundle:Classe:fiche.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function  listetudiantAction(){
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritUserBundle:EspEtudiant')->findByclasse($_POST['list']);
        return $this->render('EspritUserBundle:EspEtudiant:listetudiant.html.twig', array(
            'entities' => $entities,
        ));

        
    }
 public function  ficheeleveAction(){
         $id="12-ESP-20";
        
        $em = $this->getDoctrine()->getManager();
        $entit= $em->getRepository('EspritEnseignantBundle:Absence')->findByetudiant($id);
        
        $entity= $em->getRepository('EspritUserBundle:EspEtudiant')->find($id);
         if (!$entity) {
            throw $this->createNotFoundException('Unable to find EspEtudiant entity.');
        }
       $editForm = $this->createForm(new EspEtudiantType(), $entity);
      
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('EspritUserBundle:EspEtudiant:ficheeleve.html.twig', array(
            'entity' => $entity,
            'entit'=>$entit,
             'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),        ));
        
    }
    public function Absence (array $a,array $b){
        
        foreach( $a as $matiere ) {
          foreach( $b as $absence ) {
            
            
        }  
            
        }
        
        
    }

    /**
     * Creates a new EspEtudiant entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new EspEtudiant();
        $form = $this->createForm(new EspEtudiantType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('espetudiant_show', array('id' => $entity->getId())));
        }

        return $this->render('EspritUserBundle:EspEtudiant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new EspEtudiant entity.
     *
     */
    public function newAction()
    {
        $entity = new EspEtudiant();
        $form   = $this->createForm(new EspEtudiantType(), $entity);

        return $this->render('EspritUserBundle:EspEtudiant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EspEtudiant entity.
     *
     */
    public function showAction($idenc)
    {
         $idenc=41;
         $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:EspEtudiant')->getByIdenc($idenc);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EspEtudiant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritUserBundle:EspEtudiant:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing EspEtudiant entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:EspEtudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EspEtudiant entity.');
        }

        $editForm = $this->createForm(new EspEtudiantType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritUserBundle:EspEtudiant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    public function encadrementAction(){
         $idenc=41;
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritUserBundle:EspEtudiant')->findByespens($idenc);

        return $this->render('EspritUserBundle:EspEtudiant:encadrement.html.twig', array(
            'entities' => $entities,
        ));
         
       
      
        
        
    }
    /**
     * Edits an existing EspEtudiant entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:EspEtudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EspEtudiant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EspEtudiantType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('espetudiant_edit', array('id' => $id)));
        }

        return $this->render('EspritUserBundle:EspEtudiant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a EspEtudiant entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EspritUserBundle:EspEtudiant')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EspEtudiant entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('espetudiant'));
    }

    /**
     * Creates a form to delete a EspEtudiant entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
