<?php

namespace Esprit\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Esprit\UserBundle\Entity\FichePfe;
use Esprit\UserBundle\Form\FichePfeType;

/**
 * FichePfe controller.
 *
 */
class FichePfeController extends Controller
{
    /**
     * Lists all FichePfe entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritUserBundle:FichePfe')->findAll();

        return $this->render('EspritUserBundle:FichePfe:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new FichePfe entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new FichePfe();
        $form = $this->createForm(new FichePfeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fichepfe_show', array('id' => $entity->getId())));
        }

        return $this->render('EspritUserBundle:FichePfe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new FichePfe entity.
     *
     */
    public function newAction()
    {
        $entity = new FichePfe();
        $form   = $this->createForm(new FichePfeType(), $entity);

        return $this->render('EspritUserBundle:FichePfe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FichePfe entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:FichePfe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FichePfe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritUserBundle:FichePfe:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing FichePfe entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:FichePfe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FichePfe entity.');
        }

        $editForm = $this->createForm(new FichePfeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritUserBundle:FichePfe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing FichePfe entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:FichePfe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FichePfe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FichePfeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fichepfe_edit', array('id' => $id)));
        }

        return $this->render('EspritUserBundle:FichePfe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a FichePfe entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EspritUserBundle:FichePfe')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FichePfe entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fichepfe'));
    }

    /**
     * Creates a form to delete a FichePfe entity by id.
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
