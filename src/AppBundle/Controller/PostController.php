<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use AppBundle\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $posts = $this->getPostManager()->showAllPosts();
        $latestPosts = $this->getPostManager()->findLatest(5);

        return $this->render('AppBundle:Post:index.html.twig', [
            'posts' => $posts,
            'latestPosts' => $latestPosts,
        ]);
    }

    /**
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($slug)
    {
        $post = $this->getPostManager()->findBySlug($slug);

        return $this->render('AppBundle:Post:show.html.twig', [
            'post' => $post,
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        $post = new Post();

        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->redirect($this->generateUrl(''));
        }

        return $this->render('AppBundle:Post:new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @return \AppBundle\Service\PostManager
     */
    private function getPostManager()
    {
        return $this->get('postmanager');
    }
}