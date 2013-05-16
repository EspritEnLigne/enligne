<?php

namespace Esprit\EnseignantBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Esprit\EnseignantBundle\Entity\Module;
use Esprit\EnseignantBundle\Form\ModuleType;

/**
 * Module controller.
 *
 */
class ModuleController extends Controller
{
    /**
     * Lists all Module entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritEnseignantBundle:Module')->findAll();

        return $this->render('EspritEnseignantBundle:Module:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Module entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Module();
        $form = $this->createForm(new ModuleType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('module_show', array('id' => $entity->getId())));
        }

        return $this->render('EspritEnseignantBundle:Module:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Module entity.
     *
     */
    public function newAction()
    {
        $entity = new Module();
        $form   = $this->createForm(new ModuleType(), $entity);

        return $this->render('EspritEnseignantBundle:Module:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Module entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritEnseignantBundle:Module')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Module entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritEnseignantBundle:Module:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Module entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritEnseignantBundle:Module')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Module entity.');
        }

        $editForm = $this->createForm(new ModuleType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritEnseignantBundle:Module:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Module entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritEnseignantBundle:Module')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Module entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ModuleType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('module_edit', array('id' => $id)));
        }

        return $this->render('EspritEnseignantBundle:Module:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Module entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EspritEnseignantBundle:Module')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Module entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('module'));
    }

    /**
     * Creates a form to delete a Module entity by id.
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
