<?php
/**
 * Created by PhpStorm.
 * User: ouahab
 * Date: 27/09/2017
 * Time: 16:28
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Liste;
use AppBundle\Form\ListeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class ListeControllor extends  Controller
{
    /**
     *
     * @Route("/add", name="addtolist")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function AddAction(Request $request){

       $list = new Liste();

       $form = $this->createForm(ListeType::class, $list);
       $form->handleRequest($request);

        //btn submit
        if ($form->isSubmitted() && $form->IsValid()) {
            //add in bdd
            $bdd = $this->getDoctrine()->getManager();
            $bdd->persist($list);
            $bdd->flush();

            return new Response("le formulaire à bien été enregistrer");
        }
        $formView = $form->createView();

        return $this->render("addToList.html.twig", array(
            'form' => $formView));
    }

    /**
     * @Route("/show", name="showlist")
     * @return Response
     */
    public  function showlistAction()
    {
        $requete =$this->getDoctrine()->getRepository('AppBundle:Liste');
        $alllist = $requete->findAll();
        return $this->render("ShowList.html.twig", array(
        'list' => $alllist));
    }

    /**
     * @Route("/edit/{id}", name="edit_list")
     * @return Response
     */
    public function EditList(Liste $list, Request $request)
    {

        $form = $this->createForm(ListeType::class, $list);
        $form->handleRequest($request);

        //btn submit
        if ($form->isSubmitted() && $form->IsValid()) {
            //add in bdd
            $bdd = $this->getDoctrine()->getManager();
            $bdd->flush();

            return new Response("le formulaire à bien été modifié");
        }
        $formView = $form->createView();

        return $this->render("addToList.html.twig", array(
            'form' => $formView));
    }

    /**
     *  @Route("/delete/{id}", name="delete_list")
     * @param Liste $list
     * @return Response
     */
    public function DeleteListAction(Liste $list)
    {
        $bdd = $this->getDoctrine()->getManager();
        $bdd->remove($list);
        $bdd->flush();
        return new Response("Supprimé");
    }
}