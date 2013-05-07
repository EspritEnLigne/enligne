<?php

namespace Esprit\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Esprit\UserBundle\Entity\EspCursus;
use Esprit\UserBundle\Form\EspCursusType;

/**
 * EspCursus controller.
 *
 */
class EspCursusController extends Controller
{
    /**
     * Lists all EspCursus entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritUserBundle:EspCursus')->findAll();

        return $this->render('EspritUserBundle:EspCursus:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new EspCursus entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new EspCursus();
        $form = $this->createForm(new EspCursusType(), $entity);
        $form->bind($request);
        $em = $this->getDoctrine()->getManager();
        $entit = $em->getRepository('EspritUserBundle:EspEnseignant')->find(41);
        $entity->setEspens($entit);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

      return $this->render('EspritUserBundle:EspCursus:resultat.html.twig');  }

        return $this->render('EspritUserBundle:EspCursus:resultat.html.twig');
    }

    /**
     * Displays a form to create a new EspCursus entity.
     *
     */
    public function newAction()
    {
        $entity = new EspCursus();
        $form   = $this->createForm(new EspCursusType(), $entity);

        return $this->render('EspritUserBundle:EspCursus:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EspCursus entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:EspCursus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EspCursus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritUserBundle:EspCursus:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing EspCursus entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:EspCursus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EspCursus entity.');
        }

        $editForm = $this->createForm(new EspCursusType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritUserBundle:EspCursus:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing EspCursus entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:EspCursus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EspCursus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EspCursusType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

   
return $this->render('EspritUserBundle:EspCursus:resultat.html.twig');      }

        return $this->render('EspritUserBundle:EspCursus:resultat.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a EspCursus entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EspritUserBundle:EspCursus')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EspCursus entity.');
            }

            $em->remove($entity);
            $em->flush();
        }
return $this->render('EspritUserBundle:EspCursus:resultat.html.twig');
    }

    /**
     * Creates a form to delete a EspCursus entity by id.
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