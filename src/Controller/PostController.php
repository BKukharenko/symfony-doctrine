<?php

namespace App\Controller;

use App\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/create-post", name="create-post")
     */
    public function createPost(Request $request)
    {

      $form = $this->createForm(PostType::class);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
        //Use Doctrine


        return $this->redirectToRoute('post_show');
      }

      return $this->render('post/create-post.html.twig', [
        'form' => $form->createView(),
      ]);
    }
}
