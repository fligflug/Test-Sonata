<?php

namespace App\DataFixtures;

use App\Entity\Blog;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class BlogFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $oneArticle = new Blog();
        $oneArticle->setTitle('One article');
        $oneArticle->setBody("Body of article one");
        $oneArticle->setImage("5ddb9ab612613272410055.jpg");
        $oneArticle->setDraft(false);
        $manager->persist($oneArticle);

        $category = new Category();
        $category->setName('One category');
        $category->addBlog($oneArticle);
        $manager->persist($category);

        $manager->flush();
    }
}
