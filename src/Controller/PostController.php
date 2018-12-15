<?php

namespace App\Controller;

use App\Entity\Post;
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

      $post = new Post();
      $post->setCreatedAt(new \DateTime());

      $form = $this->createForm(PostType::class, $post, [
        'action' => $this->generateUrl('create-post')
      ]);

      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();

        $postLink = $this->generateUrl('show_post', [
          'id' => $post->getId()
        ]);


        return $this->redirect($postLink);
      }

      return $this->render('post/create-post.html.twig', [
        'form' => $form->createView(),
      ]);
    }

  /**
   * @Route("/post/{id}", name="show_post", requirements={"page"="\d+"})
   */
  public function showPost($id) {

    $em = $this->getDoctrine()->getManager();

    $post = $em->getRepository(Post::class)->find($id);
    $categories = $post->getCategory();

    return $this->render('post/show-post.html.twig', [
      'post' => $post,
      'categories' => $categories
    ]);
    }
}
