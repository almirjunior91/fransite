<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\AdminBundle\Controller;

use Franbella\Bundle\AdminBundle\Entity\PDV;
use Franbella\Bundle\AdminBundle\Form\PDVType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of PDVController
 *
 * @author ajunior
 */
class PDVController extends Controller {
    
    public function indexAction($id_pdv)
    {
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $request = $this->getRequest();
        
        //verifica se ja existe registro
        $pdv = $em->find('FranbellaAdminBundle:PDV', $id_pdv);
        
        //se nao existir, cria novo objeto
        if(is_null($pdv)){
            $pdv = new PDV();
        }
        
        $form = $this->createForm(new PDVType(), $pdv);
        //$form = $this->createForm(new DistribuidorType());
        
        $pdvs = $em->getRepository('FranbellaAdminBundle:PDV')->listarTodos();
        $mensagens = $em->getRepository('FranbellaSiteBundle:Contato')->listarTodosNaoLidos();
        $distribuidoresNaoLida = $em->getRepository('FranbellaAdminBundle:Distribuidor')->listarTodosNaoLidos();
        
        return $this->render('FranbellaAdminBundle:PDV:index.html.twig', 
                array(
                    'pdv' => $pdv,
                    'mensagens' => $mensagens,
                    'distNaoLida' => $distribuidoresNaoLida,
                    'pdvs' => $pdvs,
                    'form' => $form->createView()
                ));
    }
    
    public function cadastraAction($id_pdv)
    {
        $pdv = new PDV();
        
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        //verifica se ja existe registro
        $pdv = $em->find('FranbellaAdminBundle:PDV', $id_pdv);
        
        //se nao existir, cria novo objeto
        if(is_null($pdv)){
            $pdv = new PDV();
        }
        
        $form = $this->createForm(new PDVType(), $pdv);
        
        if($request->getMethod() == 'POST'){
            
//            var_dump($form);
//            die();
            
            $form->bind($request);
            
            if($form->isValid()){
                
                $pdv->setDataCadastro(new \Datetime());
                
                $em = $this->getDoctrine()
                   ->getEntityManager();
                
                $em->persist($pdv);
                
                $em->flush();
                
                $this->get('session')
                        ->getFlashBag()->add('resposta-pdv', 'PDV cadastrado com sucesso!');
                
                return $this->redirect($this->generateUrl('franbella_admin_pdv_home'));
                
            }
        }
        
        return $this->render('FranbellaAdminBundle:PDV:index.html.twig', 
                array('form' => $form->createView()));
    }
    
    public function excluiAction($id_pdv)
    {
        
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $pdv = $em->find('FranbellaAdminBundle:PDV', $id_pdv);
        
        $em->remove($pdv);
        
        $em->flush();
        
//        var_dump($request);
//            die();
        
        return $this->redirect($this->generateUrl('franbella_admin_pdv_home'));
        
    }
    
}
