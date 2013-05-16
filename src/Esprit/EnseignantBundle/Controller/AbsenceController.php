<?php

namespace Esprit\EnseignantBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Esprit\EnseignantBundle\Entity\Absence;
use Esprit\EnseignantBundle\Form\AbsenceType;

/**
 * Absence controller.
 *
 */
class AbsenceController extends Controller
{
    /**
     * Lists all Absence entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritEnseignantBundle:Absence')->findAll();

        return $this->render('EspritEnseignantBundle:Absence:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Absence entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Absence();
        $form = $this->createForm(new AbsenceType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('absence_show', array('id' => $entity->getId())));
        }

        return $this->render('EspritEnseignantBundle:Absence:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Absence entity.
     *
     */
    public function newAction()
    {
        $entity = new Absence();
        $form   = $this->createForm(new AbsenceType(), $entity);

        return $this->render('EspritEnseignantBundle:Absence:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Absence entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritEnseignantBundle:Absence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Absence entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritEnseignantBundle:Absence:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Absence entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritEnseignantBundle:Absence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Absence entity.');
        }

        $editForm = $this->createForm(new AbsenceType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritEnseignantBundle:Absence:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Absence entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritEnseignantBundle:Absence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Absence entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new AbsenceType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('absence_edit', array('id' => $id)));
        }

        return $this->render('EspritEnseignantBundle:Absence:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Absence entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EspritEnseignantBundle:Absence')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Absence entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->render('EspritUserBundle:ProjetRdi:resultat.html.twig');
    }

    /**
     * Creates a form to delete a Absence entity by id.
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
