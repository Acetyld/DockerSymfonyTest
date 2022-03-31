<?php

namespace App\DataFixtures;

use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
            for ($i = 0; $i < 50000; $i++) {
                $product = new Task();
                $product->setPriority(1);
                $product->setActive(1);
                $product->setStatus(1);
                $product->setInside(1);
                $product->setPosition(1);
                $product->setDescription('test ' . $i);
                $manager->persist($product);
            }
            $manager->flush();


    }
}
