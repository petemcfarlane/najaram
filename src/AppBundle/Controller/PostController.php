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
        $posts = $this->getPostManager()->showAllPost();
        $categories = $this->getPostManager()->findAllCategories();
        // var_dump($posts);
        return $this->render('AppBundle:Post:index.html.twig', [
            'posts' => $posts,
            'latestPosts' => [],
            'categories' => $categories
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
     * @return \AppBundle\Service\PostManager
     */
    private function getPostManager()
    {
        return $this->get('postmanager');
    }
}