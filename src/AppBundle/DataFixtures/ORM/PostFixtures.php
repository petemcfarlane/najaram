<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Post;
use AppBundle\Entity\User;

class PostFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $post = new Post();
        $user1 = new User();
        $user1->setUsername('Jan');
        $user1->setEmail('test@test.com');
        $user1->setPassword('password1');
        $post->setTitle('Lorem ipsum dolor sit amet');
        $post->setBody('Proin et elementum dui. Aliquam non mattis ex, vitae lobortis nisl. Cras nec dapibus tortor. Sed viverra nulla sit amet lorem suscipit condimentum. Phasellus dapibus velit ac mi gravida commodo. Vestibulum pulvinar orci dolor, sit amet faucibus sem congue in. Nam dictum sit amet orci eu maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam ac sollicitudin odio, et finibus mauris. Duis maximus tincidunt tristique.');
        $post->setImage('greenforest.jpg');
        $post->setAuthor($user1);
        $post->setPublishedAt(new \DateTime());
        $post->setUpdatedAt($post->getPublishedAt());
        $manager->persist($user1);
        $manager->persist($post);

        $post2 = new Post();
        $user2 = new User();
        $user2->setUsername('Zander');
        $user2->setEmail('test@test2.com');
        $user2->setPassword('password2');
        $post2->setTitle('Integer quam lectus');
        $post2->setBody('Integer quam lectus, congue quis nulla sed, blandit rutrum magna. Integer at orci nec massa sodales dictum eget interdum risus. Pellentesque ut lobortis ex, rutrum fermentum dui. Nullam consectetur maximus leo eu dictum. In eget consectetur risus. In enim dui, ullamcorper vel porta id, aliquam nec diam. Quisque ipsum ligula, venenatis eget urna ac, finibus suscipit sapien.');
        $post2->setImage('mountain.jpg');
        $post2->setAuthor($user2);
        $post2->setPublishedAt(new \DateTime());
        $post2->setUpdatedAt($post2->getPublishedAt());
        $manager->persist($user2);
        $manager->persist($post2);

        $post3 = new Post();
        $user3 = new User();
        $user3->setUsername('Jamie');
        $user3->setEmail('test@test3.com');
        $user3->setPassword('password3');
        $post3->setTitle('Integer quam lectus');
        $post3->setBody('Integer quam lectus, congue quis nulla sed, blandit rutrum magna. Integer at orci nec massa sodales dictum eget interdum risus. Pellentesque ut lobortis ex, rutrum fermentum dui. Nullam consectetur maximus leo eu dictum. In eget consectetur risus. In enim dui, ullamcorper vel porta id, aliquam nec diam. Quisque ipsum ligula, venenatis eget urna ac, finibus suscipit sapien.');
        $post3->setImage('mtmayon.jpg');
        $post3->setAuthor($user3);
        $post3->setPublishedAt(new \DateTime());
        $post3->setUpdatedAt($post3->getPublishedAt());
        $manager->persist($user3);
        $manager->persist($post3);

        $post4 = new Post();
        $user4 = new User();
        $user4->setUsername('Kian');
        $user4->setEmail('test@test4.com');
        $user4->setPassword('password4');
        $post4->setTitle(' Suspendisse et erat tincidunt');
        $post4->setBody('Mauris tincidunt hendrerit accumsan. Suspendisse et erat tincidunt, euismod lacus nec, cursus tortor. Vestibulum quis turpis urna. Cras commodo dolor nec sapien feugiat volutpat. Nam sagittis est in quam cursus, id aliquet neque fringilla. Fusce tempus leo a felis vehicula elementum. Proin a dictum ipsum, at venenatis nunc. Pellentesque id ligula in arcu aliquam finibus. Etiam dictum, justo sit amet interdum accumsan, orci odio gravida nisi, rutrum tristique neque sapien eget nunc. Nullam suscipit erat ligula, a ornare nisl accumsan ac. Praesent tristique sem ac nulla rhoncus, nec sagittis velit egestas. Phasellus scelerisque diam nec urna blandit varius. Maecenas bibendum vel turpis ut commodo. Phasellus quis ex eu lorem semper porttitor. In ac tincidunt justo. Morbi vestibulum lectus tortor, ac varius ante convallis at. at orci nec massa sodales dictum eget interdum risus. Pellentesque ut lobortis ex, rutrum fermentum dui. Nullam consectetur maximus leo eu dictum. In eget consectetur risus. In enim dui, ullamcorper vel porta id, aliquam nec diam. Quisque ipsum ligula, venenatis eget urna ac, finibus suscipit sapien.');
        $post4->setImage('mountain.jpg');
        $post4->setAuthor($user4);
        $post4->setPublishedAt(new \DateTime());
        $post4->setUpdatedAt($post4->getPublishedAt());
        $manager->persist($user4);
        $manager->persist($post4);

        $post5 = new Post();
        $user5 = new User();
        $user5->setUsername('Tim');
        $user5->setEmail('test@test5.com');
        $user5->setPassword('password5');
        $post5->setTitle('Vursus tortor. Vestibulum quis turpis urna. ');
        $post5->setBody('Mauris tincidunt hendrerit accumsan. Suspendisse et erat tincidunt, euismod lacus nec, cursus tortor. Vestibulum quis turpis urna. Cras commodo dolor nec sapien feugiat volutpat. Nam sagittis est in quam cursus, id aliquet neque fringilla. Fusce tempus leo a felis vehicula elementum. Proin a dictum ipsum, at venenatis nunc. Pellentesque id ligula in arcu aliquam finibus. Etiam dictum, justo sit amet interdum accumsan, orci odio gravida nisi, rutrum tristique neque sapien eget nunc. Nullam suscipit erat ligula, a ornare nisl accumsan ac. Praesent tristique sem ac nulla rhoncus, nec sagittis velit egestas. Phasellus scelerisque diam nec urna blandit varius. Maecenas bibendum vel turpis ut commodo. Phasellus quis ex eu lorem semper porttitor. In ac tincidunt justo. Morbi vestibulum lectus tortor, ac varius ante convallis at. at orci nec massa sodales dictum eget interdum risus. Pellentesque ut lobortis ex, rutrum fermentum dui. Nullam consectetur maximus leo eu dictum. In eget consectetur risus. In enim dui, ullamcorper vel porta id, aliquam nec diam. Quisque ipsum ligula, venenatis eget urna ac, finibus suscipit sapien.');
        $post5->setImage('greenforest.jpg');
        $post5->setAuthor($user5);
        $post5->setPublishedAt(new \DateTime());
        $post5->setUpdatedAt($post5->getPublishedAt());
        $manager->persist($user5);
        $manager->persist($post5);


        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}
