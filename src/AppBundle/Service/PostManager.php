<?php

namespace AppBundle\Service;

use AppBundle\Entity\Post;
use AppBundle\Form\Type;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
/**
 * Class PostManager
 */
class PostManager
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @param EntityManager $manager
     */
    public function __construct(EntityManager $manager)
    {
        $this->em = $manager;
    }


    /**
     * Find all Posts
     *
     * @return \AppBundle\Entity\Post[]|array
     */
    public function showAllPost()
    {
        $posts = $this->em->getRepository('AppBundle:Post')->findAll();

        return $posts;
    }

    /**
     * @param $slug
     * @return Post|null|object
     */
    public function findBySlug($slug)
    {
        $post = $this->em->getRepository('AppBundle:Post')->findOneBy([
            'slug' => $slug,
        ]);

        if (null === $post) {
            throw new NotFoundHttpException('Post was not found.');
        }

        return $post;
    }

    public function findAllCategories()
    {
        $categories = $this->em
            ->getRepository('AppBundle:Category')
            ->findAll();

        if (null == $categories) {
            throw new NotFoundHttpException('No categories was found.');
        }

        return $categories;
    }

    /**
     * Find all the latest posts
     *
     * @param integer $num
     * @return array
     */
    public function findLatest($num)
    {
        $latestPost = $this->em->getRepository('AppBundle:Post')->findLatest($num);

        return $latestPost;
    }


}
