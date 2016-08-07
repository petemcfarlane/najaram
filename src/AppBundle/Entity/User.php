<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Group")
     * @ORM\JoinTable(name="user_groups",
     *      joinColumns={@ORM\JoinColumn(name="user", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group", referencedColumnName="id")}
     * )
     */
    protected $groups;

    /**
     * @access protected
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Invitation", inversedBy="user")
     * @ORM\JoinColumn(referencedColumnName="code", name="invitation")
     * @Assert\NotNull(message="Your invitation code is wrong", groups={"Registration"})
     */
    protected $invitation;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Post", mappedBy="author", cascade={"remove"})
     */
    protected $posts;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Page", mappedBy="author", cascade={"remove"})
     */
    protected $pages;

    public function __construct()
    {
        parent::__construct();

        $this->posts = new ArrayCollection();
        $this->pages = new ArrayCollection();
    }

    /**
     * @return \AppBundle\Entity\Invitation
     */
    public function getInvitation()
    {
        return $this->invitation;
    }

    /**
     * @param  \AppBundle\Entity\Invitation $invitation
     * @return void
     */
    public function setInvitation(Invitation $invitation)
    {
        $this->invitation = $invitation;
    }

    /**
     * Add post
     *
     * @param \AppBundle\Entity\Post $post
     *
     * @return User
     */
    public function addPost(Post $post)
    {
        $this->posts[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \AppBundle\Entity\Post $post
     */
    public function removePost(Post $post)
    {
        $this->posts->removeElement($post);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * Add page
     *
     * @param \AppBundle\Entity\Page $page
     *
     * @return User
     */
    public function addPage(Page $page)
    {
        $this->pages[] = $page;

        return $this;
    }

    /**
     * Remove page
     *
     * @param \AppBundle\Entity\Page $page
     */
    public function removePage(Page $page)
    {
        $this->pages->removeElement($page);
    }

    /**
     * Get pages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPages()
    {
        return $this->pages;
    }
}
