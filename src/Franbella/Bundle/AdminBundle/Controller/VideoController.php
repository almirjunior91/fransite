<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of VideoController
 *
 * @author ajunior
 */
class VideoController extends Controller {
    
    public function indexAction()
    {
        $form = $this->createForm(new \Franbella\Bundle\AdminBundle\Form\VideoType());
        
        return $this->render('FranbellaAdminBundle:Video:index.html.twig', 
                array(
                    'form' => $form->createView()
                ));
    }
    
}
