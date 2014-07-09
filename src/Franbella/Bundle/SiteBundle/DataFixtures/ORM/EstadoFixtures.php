<?php

namespace Franbella\Bundle\SiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Franbella\Bundle\SiteBundle\Entity\Estado;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EstadoFixtures
 *
 * @author ajunior
 */
class EstadoFixtures extends AbstractFixture implements OrderedFixtureInterface {
    
    public function load(ObjectManager $manager) {
        $estado1 = new Estado();
        $estado1->setNome('Acre');
        $estado1->setSigla('AC');
        
        $manager->persist($estado1);
        
        $estado2 = new Estado();
        $estado2->setNome('Alagoas');
        $estado2->setSigla('AL');
        
        $manager->persist($estado2);
        
        $estado3 = new Estado();
        $estado3->setNome('Amapá');
        $estado3->setSigla('AP');
        
        $manager->persist($estado3);
        
        $estado4 = new Estado();
        $estado4->setNome('Amazonas');
        $estado4->setSigla('AM');
        
        $manager->persist($estado4);
        
        $estado5 = new Estado();
        $estado5->setNome('Bahia');
        $estado5->setSigla('BA');
        
        $manager->persist($estado5);
        
        $estado6 = new Estado();
        $estado6->setNome('Ceará');
        $estado6->setSigla('CE');
        
        $manager->persist($estado6);
        
        $estado7 = new Estado();
        $estado7->setNome('Distrito Federal');
        $estado7->setSigla('DF');
        
        $manager->persist($estado7);
        
        $estado8 = new Estado();
        $estado8->setNome('Espírito Santo');
        $estado8->setSigla('ES');
        
        $manager->persist($estado8);
        
        $estado9 = new Estado();
        $estado9->setNome('Goiás');
        $estado9->setSigla('GO');
        
        $manager->persist($estado9);
        
        $estado10 = new Estado();
        $estado10->setNome('Maranhão');
        $estado10->setSigla('MA');
        
        $manager->persist($estado10);
        
        $estado11 = new Estado();
        $estado11->setNome('Mato Grosso');
        $estado11->setSigla('MT');
        
        $manager->persist($estado11);
        
        $estado12 = new Estado();
        $estado12->setNome('Mato Grosso do Sul');
        $estado12->setSigla('MS');
        
        $manager->persist($estado12);
        
        $estado13 = new Estado();
        $estado13->setNome('Minas Gerais');
        $estado13->setSigla('MG');
        
        $manager->persist($estado13);
        
        $estado14 = new Estado();
        $estado14->setNome('Pará');
        $estado14->setSigla('PA');
        
        $manager->persist($estado14);
        
        $estado15 = new Estado();
        $estado15->setNome('Paraíba');
        $estado15->setSigla('PB');
        
        $manager->persist($estado15);
        
        $estado16 = new Estado();
        $estado16->setNome('Paraná');
        $estado16->setSigla('PR');
        
        $manager->persist($estado16);
        
        $estado17 = new Estado();
        $estado17->setNome('Pernambuco');
        $estado17->setSigla('PE');
        
        $manager->persist($estado17);
        
        $estado18 = new Estado();
        $estado18->setNome('Piauí');
        $estado18->setSigla('PI');
        
        $manager->persist($estado18);
        
        $estado19 = new Estado();
        $estado19->setNome('Rio Grande do Norte');
        $estado19->setSigla('RN');
        
        $manager->persist($estado19);
        
        $estado20 = new Estado();
        $estado20->setNome('Rio Grande do Sul');
        $estado20->setSigla('RS');
        
        $manager->persist($estado20);
        
        $estado21 = new Estado();
        $estado21->setNome('Rio de Janeiro');
        $estado21->setSigla('RJ');
        
        $manager->persist($estado21);
        
        $estado22 = new Estado();
        $estado22->setNome('Rondônia');
        $estado22->setSigla('RO');
        
        $manager->persist($estado22);
        
        $estado23 = new Estado();
        $estado23->setNome('Roraima');
        $estado23->setSigla('RR');
        
        $manager->persist($estado23);
        
        $estado24 = new Estado();
        $estado24->setNome('Santa Catarina');
        $estado24->setSigla('SC');
        
        $manager->persist($estado24);
        
        $estado25 = new Estado();
        $estado25->setNome('São Paulo');
        $estado25->setSigla('SP');
        
        $manager->persist($estado25);
        
        $estado26 = new Estado();
        $estado26->setNome('Sergipe');
        $estado26->setSigla('SE');
        
        $manager->persist($estado26);
        
        $estado27 = new Estado();
        $estado27->setNome('Tocantins');
        $estado27->setSigla('TO');
        
        $manager->persist($estado27);
        
        
        $manager->flush();
        
        $this->addReference('estado-1', $estado1);
        $this->addReference('estado-2', $estado2);
        $this->addReference('estado-3', $estado3);
        $this->addReference('estado-4', $estado4);
        $this->addReference('estado-5', $estado5);
        $this->addReference('estado-6', $estado6);
        $this->addReference('estado-7', $estado7);
        $this->addReference('estado-8', $estado8);
        $this->addReference('estado-9', $estado9);
        $this->addReference('estado-10', $estado10);
        $this->addReference('estado-11', $estado11);
        $this->addReference('estado-12', $estado12);
        $this->addReference('estado-13', $estado13);
        $this->addReference('estado-14', $estado14);
        $this->addReference('estado-15', $estado15);
        $this->addReference('estado-16', $estado16);
        $this->addReference('estado-17', $estado17);
        $this->addReference('estado-18', $estado18);
        $this->addReference('estado-19', $estado19);
        $this->addReference('estado-20', $estado20);
        $this->addReference('estado-21', $estado21);
        $this->addReference('estado-22', $estado22);
        $this->addReference('estado-23', $estado23);
        $this->addReference('estado-24', $estado24);
        $this->addReference('estado-25', $estado25);
        $this->addReference('estado-26', $estado26);
        $this->addReference('estado-27', $estado27);
        
    }
    
    public function getOrder() {
        return 1;
    }

//put your code here
}
