<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\AdminBundle\Controller;

use Franbella\Bundle\AdminBundle\Entity\Distribuidor;
use Franbella\Bundle\AdminBundle\Form\DistribuidorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of DistribuidorController
 *
 * @author ajunior
 */
class DistribuidorController extends Controller {
    
    public function indexAction($id_distribuidor)
    {
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $request = $this->getRequest();
        
        //verifica se ja existe registro
        $distribuidor = $em->find('FranbellaAdminBundle:Distribuidor', $id_distribuidor);
        
        //se nao existir, cria novo objeto
        if(is_null($distribuidor)){
            $distribuidor = new Distribuidor();
        }
        
        $form = $this->createForm(new DistribuidorType(), $distribuidor);
        //$form = $this->createForm(new DistribuidorType());
        
        $distribuidores = $em->getRepository('FranbellaAdminBundle:Distribuidor')->listarTodos();
        $mensagens = $em->getRepository('FranbellaSiteBundle:Contato')->listarTodosNaoLidos();
        $distribuidoresNaoLida = $em->getRepository('FranbellaAdminBundle:Distribuidor')->listarTodosNaoLidos();
        
        return $this->render('FranbellaAdminBundle:Distribuidor:index.html.twig', 
                array(
                    'distribuidores' => $distribuidores,
                    'distribuidor' => $distribuidor,
                    'distNaoLida' => $distribuidoresNaoLida,
                    'mensagens' => $mensagens,
                    'form' => $form->createView()
                ));
    }
    
    public function propostaAction()
    {
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $request = $this->getRequest();
        
        $distribuidores = $em->getRepository('FranbellaSiteBundle:Distribuidor')->listarTodos();
        $mensagens = $em->getRepository('FranbellaSiteBundle:Contato')->listarTodosNaoLidos();
        $distribuidoresNaoLida = $em->getRepository('FranbellaAdminBundle:Distribuidor')->listarTodosNaoLidos();
        
        return $this->render('FranbellaAdminBundle:Distribuidor:proposta.html.twig', 
                array(
                    'distribuidores' => $distribuidores,
                    'mensagens' => $mensagens,
                    'distNaoLida' => $distribuidoresNaoLida
                ));
    }
    
    public function cadastraAction($id_distribuidor)
    {
        $distribuidor = new Distribuidor();
        
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        //verifica se ja existe registro
        $distribuidor = $em->find('FranbellaAdminBundle:Distribuidor', $id_distribuidor);
        
        //se nao existir, cria novo objeto
        if(is_null($distribuidor)){
            $distribuidor = new Distribuidor();
        }
        
        $form = $this->createForm(new DistribuidorType(), $distribuidor);
        
//        var_dump($request);
//            die();
        
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            
            
            
            if($form->isValid()){
                
                $em = $this->getDoctrine()
                   ->getEntityManager();
                
                $em->persist($distribuidor);
                
                $em->flush();
                
                $this->get('session')
                        ->getFlashBag()->add('resposta-distribuidor', 'Distribuidor cadastrado com sucesso!');
                
                return $this->redirect($this->generateUrl('franbella_admin_distribuidor_home'));
                
            }
        }
        
        return $this->render('FranbellaAdminBundle:Distribuidor:index.html.twig', 
                array('form' => $form->createView()));
    }
    
    public function detalhesAction($id_distribuidor)
    {
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        //$distribuidor = $em->getRepository('FranbellaSiteBundle:Distribuidor')->carregar($id_distribuidor);
        
        
        
        $distribuidor = $em->find('FranbellaSiteBundle:Distribuidor', $id_distribuidor);
        
        //var_dump($distribuidor);
        
        //die();
        
        $distribuidor->setLida(true);
        
        $em->persist($distribuidor);
        $em->flush();
        
        //var_dump($mensagensTodas);
        
        //die();
        
        return $this->render('FranbellaAdminBundle:Distribuidor:detalhes.html.twig', 
                array(
                    'distribuidor' => $distribuidor
                ));
    }
    
}
