<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\AdminBundle\Controller;

use Franbella\Bundle\AdminBundle\Form\DistribuidorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of DistribuidorController
 *
 * @author ajunior
 */
class DistribuidorController extends Controller {
    
    public function indexAction()
    {
        $form = $this->createForm(new DistribuidorType());
        
        return $this->render('FranbellaAdminBundle:Distribuidor:index.html.twig', 
                array(
                    'form' => $form->createView()
                ));
    }
    
}
