<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of PageController
 *
 * @author ajunior
 */
class PageController extends Controller {
    
    public function indexAction()
    {   
        return $this->render('FranbellaAdminBundle:Page:index.html.twig');
    }
    
}
