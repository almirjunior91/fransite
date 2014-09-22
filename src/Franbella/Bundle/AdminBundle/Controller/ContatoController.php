<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of ContatoController
 *
 * @author ajunior
 */
class ContatoController extends Controller {
    
    public function indexAction()
    {
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $mensagensTodas = $em->getRepository('FranbellaSiteBundle:Contato')->listarTodos();  
        $mensagens = $em->getRepository('FranbellaSiteBundle:Contato')->listarTodosNaoLidos();
        $distribuidoresNaoLida = $em->getRepository('FranbellaAdminBundle:Distribuidor')->listarTodosNaoLidos();

        //var_dump($mensagensTodas);
        
        //die();
        
        return $this->render('FranbellaAdminBundle:Contato:index.html.twig', 
                array(
                    'mensagensTodas' => $mensagensTodas,
                    'mensagens' => $mensagens,
                    'distNaoLida' => $distribuidoresNaoLida
                ));
    }
    
    public function detalhesAction($id_contato)
    {
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $mensagem = $em->find('FranbellaSiteBundle:Contato', $id_contato);

        $mensagem->setLida(true);
        
        $em->persist($mensagem);
        $em->flush();
        
        //var_dump($mensagensTodas);
        
        //die();
        
        return $this->render('FranbellaAdminBundle:Contato:detalhes.html.twig', 
                array(
                    'mensagem' => $mensagem
                ));
    }
    
}
