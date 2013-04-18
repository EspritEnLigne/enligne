<?php

namespace Esprit\RubriqueBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Esprit\RubriqueBundle\Entity\DocumentStage;
use Esprit\RubriqueBundle\Form\DocumentStageType;

/**
 * DocumentStage controller.
 *
 */
class DocumentStageController extends Controller
{
    /**
     * Lists all DocumentStage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritRubriqueBundle:DocumentStage')->findAll();

        return $this->render('EspritRubriqueBundle:DocumentStage:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new DocumentStage entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new DocumentStage();
        $form = $this->createForm(new DocumentStageType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->upload();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('documentstage_show', array('id' => $entity->getId())));
        }

        return $this->render('EspritRubriqueBundle:DocumentStage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new DocumentStage entity.
     *
     */
    public function newAction()
    {
        $entity = new DocumentStage();
        $form   = $this->createForm(new DocumentStageType(), $entity);

        return $this->render('EspritRubriqueBundle:DocumentStage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DocumentStage entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritRubriqueBundle:DocumentStage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DocumentStage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritRubriqueBundle:DocumentStage:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing DocumentStage entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritRubriqueBundle:DocumentStage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DocumentStage entity.');
        }

        $editForm = $this->createForm(new DocumentStageType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritRubriqueBundle:DocumentStage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing DocumentStage entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritRubriqueBundle:DocumentStage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DocumentStage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new DocumentStageType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('documentstage_edit', array('id' => $id)));
        }

        return $this->render('EspritRubriqueBundle:DocumentStage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a DocumentStage entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EspritRubriqueBundle:DocumentStage')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DocumentStage entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('documentstage'));
    }

    /**
     * Creates a form to delete a DocumentStage entity by id.
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
