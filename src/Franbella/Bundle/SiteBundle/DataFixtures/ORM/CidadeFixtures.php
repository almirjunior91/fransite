<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\SiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Franbella\Bundle\SiteBundle\Entity\Cidade;

/**
 * Description of CidadeFixtures
 *
 * @author ajunior
 */
class CidadeFixtures extends AbstractFixture implements OrderedFixtureInterface {
    
    public function load(ObjectManager $manager) {
        
        $cidade1 = new Cidade();
        $cidade1->setNome('Rio de Janeiro');
        $cidade1->setEstado($manager->merge($this->getReference('estado-21')));
        
        $manager->persist($cidade1);
        
        $cidade2 = new Cidade();
        $cidade2->setNome('Valença');
        $cidade2->setEstado($manager->merge($this->getReference('estado-21')));
        
        $manager->persist($cidade2);
        
        $manager->flush();
        
        $this->addReference('cidade-1', $cidade1);
        $this->addReference('cidade-2', $cidade2);
        
    }
    
    public function getOrder() {
        return 2;
    }

//put your code here
}
