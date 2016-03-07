<?php

namespace CoursBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CoursBundle\Entity\cours;
use CoursBundle\Form\coursType;

/**
 * cours controller.
 *
 * @Route("/cours")
 */
class coursController extends Controller
{
    /**
     * Lists all cours entities.
     *
     * @Route("/", name="cours_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cours = $em->getRepository('CoursBundle:cours')->findAll();

        return $this->render('cours/index.html.twig', array(
            'cours' => $cours,
        ));
    }

    /**
     * Creates a new cours entity.
     *
     * @Route("/new", name="cours_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $cour = new cours();
        $form = $this->createForm('CoursBundle\Form\coursType', $cour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cour);
            $em->flush();

            return $this->redirectToRoute('cours_show', array('id' => $cours->getId()));
        }

        return $this->render('cours/new.html.twig', array(
            'cour' => $cour,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a cours entity.
     *
     * @Route("/{id}", name="cours_show")
     * @Method("GET")
     */
    public function showAction(cours $cour)
    {
        $deleteForm = $this->createDeleteForm($cour);

        return $this->render('cours/show.html.twig', array(
            'cour' => $cour,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cours entity.
     *
     * @Route("/{id}/edit", name="cours_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, cours $cour)
    {
        $deleteForm = $this->createDeleteForm($cour);
        $editForm = $this->createForm('CoursBundle\Form\coursType', $cour);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cour);
            $em->flush();

            return $this->redirectToRoute('cours_edit', array('id' => $cour->getId()));
        }

        return $this->render('cours/edit.html.twig', array(
            'cour' => $cour,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a cours entity.
     *
     * @Route("/{id}", name="cours_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, cours $cour)
    {
        $form = $this->createDeleteForm($cour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cour);
            $em->flush();
        }

        return $this->redirectToRoute('cours_index');
    }

    /**
     * Creates a form to delete a cours entity.
     *
     * @param cours $cour The cours entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(cours $cour)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cours_delete', array('id' => $cour->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
