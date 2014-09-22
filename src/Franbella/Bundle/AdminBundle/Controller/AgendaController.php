<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\AdminBundle\Controller;

use Franbella\Bundle\AdminBundle\Entity\Agenda;
use Franbella\Bundle\AdminBundle\Entity\AgendaFoto;
use Franbella\Bundle\AdminBundle\Form\AgendaFotoType;
use Franbella\Bundle\AdminBundle\Form\AgendaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AgendaController
 *
 * @author ajunior
 */
class AgendaController extends Controller {
    
    public function indexAction($id_evento)
    {
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $request = $this->getRequest();
        
        //verifica se ja existe registro
        $evento = $em->find('FranbellaAdminBundle:Agenda', $id_evento);
        
        //se nao existir, cria novo objeto
        if(is_null($evento)){
            $evento = new Agenda();
        }
        
        $form = $this->createForm(new AgendaType(), $evento);
        //$form = $this->createForm(new DistribuidorType());
        
        $eventos = $em->getRepository('FranbellaAdminBundle:Agenda')->listarTodos();  
        $mensagens = $em->getRepository('FranbellaSiteBundle:Contato')->listarTodosNaoLidos();
        $distribuidoresNaoLida = $em->getRepository('FranbellaAdminBundle:Distribuidor')->listarTodosNaoLidos();
        
        return $this->render('FranbellaAdminBundle:Agenda:index.html.twig', 
                array(
                    'eventos' => $eventos,
                    'evento' => $evento,
                    'mensagens' => $mensagens,
                    'distNaoLida' => $distribuidoresNaoLida,
                    'form' => $form->createView()
                ));
    }
    
    public function cadastraAction($id_evento)
    {
        $evento = new Agenda();
        
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        //verifica se ja existe registro
        $evento = $em->find('FranbellaAdminBundle:Agenda', $id_evento);
        
        //se nao existir, cria novo objeto
        if(is_null($evento)){
            $evento = new Agenda();
        }
        
        $form = $this->createForm(new AgendaType(), $evento);
        
//        var_dump($request);
//            die();
        
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            
            
            
            if($form->isValid()){
                
                $em = $this->getDoctrine()
                   ->getEntityManager();
                
                $em->persist($evento);
                
                $em->flush();
                
                $this->get('session')
                        ->getFlashBag()->add('resposta-evento', 'Evento cadastrado com sucesso!');
                
                return $this->redirect($this->generateUrl('franbella_admin_agenda_home'));
                
            }
        }
        
        return $this->render('FranbellaAdminBundle:Agenda:index.html.twig', 
                array('form' => $form->createView()));
    }
    
    public function fotosAction($id_evento)
    {
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $request = $this->getRequest();
        
        $agendaFoto = new AgendaFoto();
        
        //verifica se ja existe registro
        $evento = $em->find('FranbellaAdminBundle:Agenda', $id_evento);
        
        //se nao existir, cria novo objeto
        if(is_null($evento)){
            $evento = new Agenda();
        }
        
        $form = $this->createForm(new AgendaFotoType(), $agendaFoto);
        //$form = $this->createForm(new DistribuidorType());
        
        $eventos = $em->getRepository('FranbellaAdminBundle:Agenda')->listarTodos();
        $fotos = $em->getRepository('FranbellaAdminBundle:AgendaFoto')->listarTodos(null, $id_evento);
        $mensagens = $em->getRepository('FranbellaSiteBundle:Contato')->listarTodosNaoLidos();
        $distribuidoresNaoLida = $em->getRepository('FranbellaAdminBundle:Distribuidor')->listarTodosNaoLidos();
        
        return $this->render('FranbellaAdminBundle:Agenda:fotos.html.twig', 
                array(
                    'evento' => $evento,
                    'fotos' => $fotos,
                    'mensagens' => $mensagens,
                    'distNaoLida' => $distribuidoresNaoLida,
                    'form' => $form->createView()
                ));
    }
    
        public function cadastraFotoAction($id_evento)
    {
        $evento = new Agenda();
        $fotoEvento = new AgendaFoto();
        
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        //verifica se ja existe registro
        $evento = $em->find('FranbellaAdminBundle:Agenda', $id_evento);
        
        $fotoEvento->setAgenda($evento);
        
        $form = $this->createForm(new AgendaFotoType(), $fotoEvento);
        
//        var_dump($request);
//            die();
        
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            
            
            
            if($form->isValid()){
                
                $em = $this->getDoctrine()
                   ->getEntityManager();
                
                $em->persist($fotoEvento);
                
                $em->flush();
                
                $this->get('session')
                        ->getFlashBag()->add('resposta-foto', 'Foto cadastrada com sucesso!');
                
                return $this->redirect($this->generateUrl('franbella_admin_agenda_fotos', array('id_evento' => $evento->getId())));
                
            }
        }
        
        return $this->render('FranbellaAdminBundle:Agenda:fotos.html.twig', 
                array('form' => $form->createView()));
        
    }
    
    public function excluiAction($id_evento)
    {
        
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $evento = $em->find('FranbellaAdminBundle:Agenda', $id_evento);
        
        $fotos = $em->getRepository('FranbellaAdminBundle:AgendaFoto')->listarTodos(null, $id_evento);
        
        //var_dump($fotos);
//        die();
        
        foreach ($fotos as $foto) {
            $em->remove($foto);
            $em->flush();
        }
        
        //$em->flush();
        
        $em->remove($evento);
        
        $em->flush();
        
//        var_dump($request);
//            die();
        
        return $this->redirect($this->generateUrl('franbella_admin_agenda_home'));
        
    }
    
    public function excluiFotoAction($id_foto, $id_evento)
    {
        $fotoEvento = new AgendaFoto();
        
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        //verifica se ja existe registro
        $fotoEvento = $em->find('FranbellaAdminBundle:AgendaFoto', $id_foto);
        
        $evento = $em->find('FranbellaAdminBundle:Agenda', $id_evento);
        
        $em->remove($fotoEvento);
        
        $em->flush();
        
//        var_dump($request);
//            die();
        
        return $this->redirect($this->generateUrl('franbella_admin_agenda_fotos', array('id_evento' => $evento->getId())));
        
    }
    
}
