<?php

namespace App\DataFixtures;

use App\Entity\Skill;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SkillFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $homeopathe = new Skill();
        $homeopathe ->setLabel("Homeopathe");
        $manager ->persist($homeopathe);
        $this->addReference("skill-homeopathe", $homeopathe);

        $medecin = new Skill();
        $medecin ->setLabel("Médecin généraliste");
        $manager ->persist($medecin);
        $this->addReference("skill-medecin", $medecin);


        $dentise = new Skill();
        $dentise ->setLabel("Dentiste");
        $manager ->persist($dentise);
        $this->addReference("skill-dentiste", $dentise);


        $manager->flush();
    }
}
