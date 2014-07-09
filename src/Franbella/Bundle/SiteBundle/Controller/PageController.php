<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\SiteBundle\Controller;

use Doctrine\ORM\EntityRepository;
use Franbella\Bundle\SiteBundle\Entity\Contato;
use Franbella\Bundle\SiteBundle\Entity\Venda;
use Franbella\Bundle\SiteBundle\Form\ContatoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of PageController
 *
 * @author ajunior
 */
class PageController extends Controller {
    
    public function indexAction()
    {
        return $this->render('FranbellaSiteBundle:Page:index.html.twig');
    }
    
    public function linhaAction()
    {
        return $this->render('FranbellaSiteBundle:Page:linha.html.twig');
    }
    
    public function tratamentoAction()
    {
        return $this->render('FranbellaSiteBundle:Page:tratamento.html.twig');
    }
    
    public function removedoresAction()
    {
        return $this->render('FranbellaSiteBundle:Page:removedores.html.twig');
    }
    
    public function espacoAction()
    {
        return $this->render('FranbellaSiteBundle:Page:espacoManicure.html.twig');
    }
    
    public function agendaAction()
    {
        return $this->render('FranbellaSiteBundle:Page:agenda.html.twig');
    }
    
    public function faleAction()
    {
        
        $contato = new Contato();
        $form = $this->createForm(new ContatoType(), $contato);
        
        $request = $this->getRequest();
        
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            
            if($form->isValid()){
                $email = \Swift_Message::newInstance()
                        ->setSubject("Contato Franbella: ".$form->get('assunto')->getData())
                        ->setFrom($form->get('email')->getData())
                        ->setTo('almir@valeservicefarma.com.br')
                        ->setBody($this->renderView('FranbellaSiteBundle:Page:email.html.twig', 
                                array('contato' => $contato)))
                        ->setContentType("text/html");
                        //->setBody($form->get('mensagem')->getData());
//                $this->get('mailer')->send($email);
                
                $this->get('session')
                        ->getFlashBag()->add('resposta-contato', 'Mensagem enviada com sucesso! Obrigado!');
                
                return $this->redirect($this->generateUrl('franbella_site_fale_conosco'));
                
            }
        }
        
        return $this->render('FranbellaSiteBundle:Page:faleConosco.html.twig', 
                array('form' => $form->createView()));
    }
    
    public function encontroAction()
    {
        
        $em = $this->getDoctrine()
                   ->getEntityManager();

        $estados = $em->getRepository('FranbellaSiteBundle:Estado')
                    ->listarTodosAtivos();
        
        $form = $this->createFormBuilder()
                ->add('estado', 'bfos_cidade_choice', 
                        array(
                            'label' => 'Qual seu estado?',
                            'label_attr' => array(
                                'class' => 'label_form'
                            )
                        ))
               /* ->add('cidade', 'entity', array(
                        'class' => 'FranbellaSiteBundle:Venda',
                        'property' => 'cidade',
                        'label' => 'Cidade?',
                        'label_attr' => array(
                            'class' => 'label_form'
                        ),
                        'query_builder' => function(\Franbella\Bundle\SiteBundle\Entity\Repository\VendaRepository $er){
                              return $er->listaCidades();
//                            return $er
//                                    ->createQueryBuilder('v')
//                                    ->select(array('v.cidade'))
//                                    ->distinct()
//                                    ->orderBy('v.cidade')
//                                    ;
                        }
                    ))*/
                ->getForm();
        
        return $this
                ->render('FranbellaSiteBundle:Page:ondeEncontro.html.twig', 
                        array(
                            'estados' => $estados,
                            'form' => $form->createView()
                        ));
    }
    
    public function distribuidorAction()
    {
        
        $form = $this->createFormBuilder()
                ->add('estado', 'bfos_cidade_choice', 
                        array(
                            'label' => 'Qual seu estado?',
                            'label_attr' => array(
                                'class' => 'label_form'
                            )
                        ))
                ->add('comentario', 'textarea', 
                        array(
                            'label' => 'Comentário:',
                            'label_attr' => array(
                                'class' => 'label_form'
                            ),
                            'attr' => array(
                                'rows' => 4
                            )
                        ))
                ->add('negocio', 'entity', array(
                        'class' => 'FranbellaSiteBundle:TipoNegocio',
                        'property' => 'nome',
                        'label' => 'Seu Negócio?',
                        'label_attr' => array(
                            'class' => 'label_form'
                        ),
                    ))
                ->getForm();
        
        return $this
                ->render('FranbellaSiteBundle:Page:distribuidor.html.twig', 
                        array(
                            'form' => $form->createView()
                        ));
    }
    
    public function sincronizaAction()
    {
        return $this->render('FranbellaSiteBundle:Page:recebeDados.html.twig');
    }
    
    public function gravaAction()
    {
        
    $em = $this->getDoctrine()
                   ->getEntityManager();

    //$conexao = new Conexao();

    $itens = json_decode(str_replace('\\', '', $_POST['itens']));

    //$conexao->conecta();

    //$query = "DELETE FROM vendas /*WHERE data_cadastro < DATE_ADD(NOW(), INTERVAL -2 WEEK)*/";
    //mysql_query($query) or die("Erro ao limpar registros.");

//    $query = $em->createQuery('DELETE FranbellaSiteBundle:Venda v '
//            . 'WHERE data_cadastro < DATE_ADD(NOW(), INTERVAL -2 WEEK)');
    
    //$query->execute();
    
    foreach ($itens as $item) {
        
        $venda = new Venda();
        
        $venda->setRazaoSocial($item->razao_social);
        $venda->setFantasia($item->fantasia);
        $venda->setTipo($item->tipo);
        $venda->setCep($item->cep);
        $venda->setEndereco($item->endereco);
        $venda->setNumero($item->numero);
        $venda->setComplemento($item->complemento);
        $venda->setBairro($item->bairro);
        $venda->setCidade($item->cidade);
        $venda->setUf($item->uf);
        
        $em->persist($venda);
        
        //mysql_query($queryProduto) or die("Erro ao cadastrar produto");
    }
    
    $em->flush();
        return new Response();
        //return $this->render('FranbellaSiteBundle:Page:grava.html.php');
    }
    
}