<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\SiteBundle\Controller;

use Franbella\Bundle\SiteBundle\Entity\Distribuidor;
use Franbella\Bundle\SiteBundle\Entity\DistribuidorFornecedor;
use Franbella\Bundle\SiteBundle\Entity\TipoNegocio;
use Franbella\Bundle\SiteBundle\Form\DistribuidorType;
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
        
        $request = $this->getRequest();
        
        $distribuidor = new Distribuidor();
        
        $forn1 = $request->get("forn");
        $contato1 = $request->get("contato");
        $tel1 = $request->get("tel");
        
        $forn2 = $request->get("forn2");
        $contato2 = $request->get("contato2");
        $tel2 = $request->get("tel2");
        
        $forn3 = $request->get("forn3");
        $contato3 = $request->get("contato3");
        $tel3 = $request->get("tel3");
        
        $form = $request->get('franbella_bundle_sitebundle_distribuidor');
        
        $form = $this->createForm(new DistribuidorType(), $distribuidor);
        
        $form->bind($request);
        
        //var_dump($form);
        
        if($form->isValid()){
            
            echo $form->isValid();
            
            $tipoNegocio = new TipoNegocio();

    //        $distribuidorContato->setCidade($cidade);
    //        $distribuidorContato->setComentario($comentario);
    //        $distribuidorContato->setNegocio($tipoNegocio);

            $distribuidor->setTipoDistribuidor($request->get("tipo_distribuidor"));

            $distribuidor->setFaturamentoBruto(str_replace(',', '.', str_replace('.', '', $distribuidor->getFaturamentoBruto())));

            $distribuidor->setDataEnvio(new \DateTime());
            
            $em->persist($distribuidor);
            $em->flush();

            $distribuidorFornecedor = new DistribuidorFornecedor();
            $distribuidorFornecedor->setDistribuidor($distribuidor);
            $distribuidorFornecedor->setContato($contato1);
            $distribuidorFornecedor->setFornecedor($forn1);
            $distribuidorFornecedor->setTelefone($tel1);

            $em->persist($distribuidorFornecedor);

            $distribuidorFornecedor2 = new DistribuidorFornecedor();
            $distribuidorFornecedor2->setDistribuidor($distribuidor);
            $distribuidorFornecedor2->setContato($contato2);
            $distribuidorFornecedor2->setFornecedor($forn2);
            $distribuidorFornecedor2->setTelefone($tel2);

            $em->persist($distribuidorFornecedor2);

            $distribuidorFornecedor3 = new DistribuidorFornecedor();
            $distribuidorFornecedor3->setDistribuidor($distribuidor);
            $distribuidorFornecedor3->setContato($contato3);
            $distribuidorFornecedor3->setFornecedor($forn3);
            $distribuidorFornecedor3->setTelefone($tel3);

            $em->persist($distribuidorFornecedor3);

            $em->flush();

             $this->get('session')->getFlashBag()
                     ->add('retorno-contato', 'Seu contato foi recebido com sucesso! Obrigado!!');

            return $this->redirect($this->generateUrl('franbella_site_seja_distribuidor'));
        }
        
        return $this->render('FranbellaSiteBundle:Page:distribuidor.html.twig', 
                array('form' => $form->createView()));
        
//        $cidade = $form['estado']['cidade'];
//        $comentario = $form['comentario'];
//        $negocio = $form['negocio'];
        
    }
    
}
