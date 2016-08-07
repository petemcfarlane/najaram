<?php

namespace AppBundle\Service;

use AppBundle\Entity\Page;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PageManager
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * Construct
     *
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * @param $slug
     * @return Page|null|object
     */
    public function findBySlug($slug)
    {
        $page = $this->em->getRepository('AppBundle:Page')->findOneBy([
            'slug' => $slug,
        ]);

        if (null === $page) {
            throw new NotFoundHttpException('Page was not found.');
        }

        return $page;
    }
}