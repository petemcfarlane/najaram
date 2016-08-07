<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Page;

class PageController extends Controller
{
    /**
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($slug)
    {
        $page = $this->getPageManager()->findBySlug($slug);

        return $this->render('AppBundle:Page:show.html.twig', [
            'page' => $page
        ]);
    }

    /**
     * Get the Service manager
     *
     * @return \AppBundle\Service\PageManager
     */
    private function getPageManager()
    {
        return $this->get('pagemanager');
    }
}
