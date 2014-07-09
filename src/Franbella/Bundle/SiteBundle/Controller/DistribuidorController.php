<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\SiteBundle\Controller;

use Franbella\Bundle\SiteBundle\Entity\DistribuidorContato;
use Franbella\Bundle\SiteBundle\Entity\TipoNegocio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of DistribuidorController
 *
 * @author ajunior
 */
class DistribuidorController extends Controller {
    
    public function cadastraAction() {
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $form = $this->getRequest()->get('form');
        
        $cidade = $form['estado']['cidade'];
        $comentario = $form['comentario'];
        $negocio = $form['negocio'];
        
        $distribuidorContato = new DistribuidorContato();
        $tipoNegocio = new TipoNegocio();
        
        $tipoNegocio = $em->getRepository('FranbellaSiteBundle:TipoNegocio')
                ->findOneBy(array('id' => $negocio));
        
        $distribuidorContato->setCidade($cidade);
        $distribuidorContato->setComentario($comentario);
        $distribuidorContato->setNegocio($tipoNegocio);
        
        $em->persist($distribuidorContato);
        $em->flush();
        
         $this->get('session')->getFlashBag()
                 ->add('retorno-contato', 'Seu contado foi recebido com sucesso! Obrigado!!');
        
        return $this->redirect($this->generateUrl('franbella_site_seja_distribuidor'));
        
    }
    
}
