<?php

namespace Esprit\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Esprit\UserBundle\Entity\ProjetRdi;
use Esprit\UserBundle\Form\ProjetRdiType;

/**
 * ProjetRdi controller.
 *
 */
class ProjetRdiController extends Controller
{
    /**
     * Lists all ProjetRdi entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritUserBundle:ProjetRdi')->findAll();

        return $this->render('EspritUserBundle:ProjetRdi:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new ProjetRdi entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new ProjetRdi();
        $form = $this->createForm(new ProjetRdiType(), $entity);
        $form->bind($request);
         $em = $this->getDoctrine()->getManager();
     $entit = $em->getRepository('EspritUserBundle:EspEnseignant')->find(41);
        $entity->setEspens($entit);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

          return $this->render('EspritUserBundle:ProjetRdi:resultat.html.twig');  }

        return $this->render('EspritUserBundle:ProjetRdi:resultat.html.twig');
    }

    /**
     * Displays a form to create a new ProjetRdi entity.
     *
     */
    public function newAction()
    {
        $entity = new ProjetRdi();
        $form   = $this->createForm(new ProjetRdiType(), $entity);

        return $this->render('EspritUserBundle:ProjetRdi:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ProjetRdi entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:ProjetRdi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProjetRdi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritUserBundle:ProjetRdi:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing ProjetRdi entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:ProjetRdi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProjetRdi entity.');
        }

        $editForm = $this->createForm(new ProjetRdiType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritUserBundle:ProjetRdi:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing ProjetRdi entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritUserBundle:ProjetRdi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProjetRdi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ProjetRdiType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

          return $this->render('EspritUserBundle:ProjetRdi:resultat.html.twig');      }

        return $this->render('EspritUserBundle:ProjetRdi:resultat.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ProjetRdi entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EspritUserBundle:ProjetRdi')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ProjetRdi entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->render('EspritUserBundle:ProjetRdi:resultat.html.twig');
    }

    /**
     * Creates a form to delete a ProjetRdi entity by id.
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
