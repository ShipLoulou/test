<?php

namespace App\DataFixtures;

use App\Entity\HelloWord;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $words = ['Bonjour', 'Hello', 'Hola'];

        foreach ($words as $word) {
            $hello = new HelloWord;

            $hello->setLibelle($word);

            $manager->persist($hello);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
