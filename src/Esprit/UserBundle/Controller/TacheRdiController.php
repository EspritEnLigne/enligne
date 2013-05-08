<?php

namespace Esprit\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Esprit\UserBundle\Entity\TacheRdi;
use Esprit\UserBundle\Form\TacheRdiType;

/**
 * TacheRdi controller.
 *
 */
class TacheRdiController extends Controller
{
    /**
     * Lists all TacheRdi entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritUserBundle:TacheRdi')->findAll();

        return $this->render('EspritUserBundle:TacheRdi:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new TacheRdi entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new TacheRdi();
//        $projet = $em->getRepository('EspritUserBundle:ProjetRdi')->find($id);
//        $entity-> setProjet($projet);
        $form = $this->createForm(new TacheRdiType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

           return $this->render('EspritUserBundle:TacheRdi:resultat.html.twig');  }

        return $this->render('EspritUserBundle:TacheRdi:resultat.html.twig');
    }

    /**
     * Displays a form to create a new TacheRdi entity.
     *
     */
    public function newAction()
    {
        $entity = new TacheRdi();
        $form   = $this->createForm(new TacheRdiType(), $entity);

        return $this->render('EspritUserBundle:TacheRdi:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TacheRdi entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:TacheRdi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TacheRdi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritUserBundle:TacheRdi:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing TacheRdi entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:TacheRdi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TacheRdi entity.');
        }

        $editForm = $this->createForm(new TacheRdiType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritUserBundle:TacheRdi:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing TacheRdi entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:TacheRdi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TacheRdi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TacheRdiType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

          return $this->render('EspritUserBundle:TacheRdi:resultat.html.twig');      }

        return $this->render('EspritUserBundle:TacheRdi:resultat.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TacheRdi entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EspritUserBundle:TacheRdi')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TacheRdi entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

         return $this->render('EspritUserBundle:TacheRdi:resultat.html.twig');
    }

    /**
     * Creates a form to delete a TacheRdi entity by id.
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
