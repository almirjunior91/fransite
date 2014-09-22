<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\AdminBundle\Controller;

use Franbella\Bundle\AdminBundle\Entity\TipoPDV;
use Franbella\Bundle\AdminBundle\Form\TipoPDVType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of TipoPDVController
 *
 * @author ajunior
 */
class TipoPDVController extends Controller {
    
    public function indexAction($id_tipo_pdv)
    {
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $request = $this->getRequest();
        
        //verifica se ja existe registro
        $tipoPdv = $em->find('FranbellaAdminBundle:TipoPDV', $id_tipo_pdv);
        
        //se nao existir, cria novo objeto
        if(is_null($tipoPdv)){
            $tipoPdv = new TipoPDV();
        }
        
        $form = $this->createForm(new TipoPDVType(), $tipoPdv);
        //$form = $this->createForm(new DistribuidorType());
        
        $tiposPdv = $em->getRepository('FranbellaAdminBundle:TipoPDV')->listarTodos();
        $mensagens = $em->getRepository('FranbellaSiteBundle:Contato')->listarTodosNaoLidos();
        $distribuidoresNaoLida = $em->getRepository('FranbellaAdminBundle:Distribuidor')->listarTodosNaoLidos();
        
        return $this->render('FranbellaAdminBundle:TipoPDV:index.html.twig', 
                array(
                    'tipoPdv' => $tipoPdv,
                    'mensagens' => $mensagens,
                    'distNaoLida' => $distribuidoresNaoLida,
                    'tiposPdv' => $tiposPdv,
                    'form' => $form->createView()
                ));
    }
    
    public function cadastraAction($id_tipo_pdv)
    {
        $tipoPdv = new TipoPDV();
        
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        //verifica se ja existe registro
        $tipoPdv = $em->find('FranbellaAdminBundle:TipoPDV', $id_tipo_pdv);
        
        //se nao existir, cria novo objeto
        if(is_null($tipoPdv)){
            $tipoPdv = new TipoPDV();
        }
        
        $form = $this->createForm(new TipoPDVType(), $tipoPdv);
        
//        var_dump($tipoPdv);
//            die();
        
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            
            
            
            if($form->isValid()){
                
                $em = $this->getDoctrine()
                   ->getEntityManager();
                
                $em->persist($tipoPdv);
                
                $em->flush();
                
                $this->get('session')
                        ->getFlashBag()->add('resposta-tipo-pdv', 'Tipo de PDV cadastrado com sucesso!');
                
                return $this->redirect($this->generateUrl('franbella_admin_pdv_tipo_home'));
                
            }
        }
        
        return $this->render('FranbellaAdminBundle:TipoPDV:index.html.twig', 
                array('form' => $form->createView()));
    }
    
    public function excluiAction($id_tipo_pdv)
    {
        
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $tipo_pdv = $em->find('FranbellaAdminBundle:TipoPDV', $id_tipo_pdv);
        
        $em->remove($tipo_pdv);
        
        $em->flush();
        
//        var_dump($request);
//            die();
        
        return $this->redirect($this->generateUrl('franbella_admin_pdv_tipo_home'));
        
    }
    
}
