<?php

namespace App\DataFixtures;


use Faker\Factory;
use App\Entity\User;
use App\Entity\Article;
use App\Entity\Category;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $users = [];
        $categories = [];
        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            $user = new User();
            $user->setUsername($faker->name)->setFirstname($faker->firstname)->setLastname($faker->lastname)
                ->setEmail($faker->email)->setPassword($faker->password)->setCreatedAt(new DateTimeImmutable);
            $manager->persist($user);
            $users[] = $user;
        }

        for ($i = 0; $i < 15; $i++) {
            $categorie = new Category();
            $categorie->setTitle($faker->text(50))->setDescription($faker->text(50))->setImage("https://placeholdpic.com/150x150");
            $manager->persist($categorie);
            $categories[] = $categorie;
        }

        for ($i = 0; $i < 100; $i++) {
            $article = new Article();
            $article->setTitle($faker->text(25))->setContent($faker->text(100))->setImage("https://placeholdpic.com/150x150")
                ->setCreatedAt(new DateTimeImmutable)->addCategory($categories[$faker->numberBetween(0, 14)])
                ->setAuthor($users[$faker->numberBetween(0, 49)]);
            $manager->persist($article);
        }


        $manager->flush();
    }
}
