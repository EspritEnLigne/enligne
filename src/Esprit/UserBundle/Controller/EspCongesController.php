<?php

namespace Esprit\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Esprit\UserBundle\Entity\EspConges;
use Esprit\UserBundle\Form\EspCongesType;

/**
 * EspConges controller.
 *
 */
class EspCongesController extends Controller
{
    /**
     * Lists all EspConges entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritUserBundle:EspConges')->findAll();

        return $this->render('EspritUserBundle:EspConges:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function congesAction()
    {
         $idenc=41;
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritUserBundle:EspConges')->findByespconges($idenc);

        return $this->render('EspritUserBundle:EspConges:conges.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new EspConges entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new EspConges();
        $form = $this->createForm(new EspCongesType(), $entity);
        $form->bind($request);
       $em = $this->getDoctrine()->getManager();
        $entit = $em->getRepository('EspritUserBundle:EspEnseignant')->find(41);
         $entity->setEspconges($entit);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('espconges_show', array('id' => $entity->getId())));
        }

        return $this->render('EspritUserBundle:EspConges:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new EspConges entity.
     *
     */
    public function newAction()
    {
        $entity = new EspConges();
        $form   = $this->createForm(new EspCongesType(), $entity);

        return $this->render('EspritUserBundle:EspConges:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EspConges entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:EspConges')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EspConges entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritUserBundle:EspConges:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing EspConges entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:EspConges')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EspConges entity.');
        }

        $editForm = $this->createForm(new EspCongesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritUserBundle:EspConges:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing EspConges entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:EspConges')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EspConges entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EspCongesType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('espconges_edit', array('id' => $id)));
        }

        return $this->render('EspritUserBundle:EspConges:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a EspConges entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EspritUserBundle:EspConges')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EspConges entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('espconges'));
    }

    /**
     * Creates a form to delete a EspConges entity by id.
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
