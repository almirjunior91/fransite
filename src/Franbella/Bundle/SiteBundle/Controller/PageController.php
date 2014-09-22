<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\SiteBundle\Controller;

use Franbella\Bundle\SiteBundle\Entity\Contato;
use Franbella\Bundle\SiteBundle\Entity\Distribuidor;
use Franbella\Bundle\SiteBundle\Entity\Venda;
use Franbella\Bundle\SiteBundle\Form\ContatoType;
use Franbella\Bundle\SiteBundle\Form\DistribuidorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\Response;
use Franbella\Bundle\SiteBundle\Entity\Conexao;

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
        
        $em = $this->getDoctrine()
                   ->getEntityManager();

        $eventos = $em->getRepository('FranbellaAdminBundle:Agenda')
                    ->listarTodos();
        
        return $this->render('FranbellaSiteBundle:Page:agenda.html.twig', 
                array(
                    'eventos' => $eventos
                ));
    }
    
    public function faleAction()
    {
        
        $contato = new Contato();
        $form = $this->createForm(new ContatoType(), $contato);
        
        $request = $this->getRequest();
        
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            
            if($form->isValid()){
                
                $em = $this->getDoctrine()
                   ->getEntityManager();
                
                $contato->setDataEnvio(new \DateTime());
                
                $em->persist($contato);
                $em->flush();
                
                $email = \Swift_Message::newInstance()
                        ->setSubject("Contato Franbella: ".$form->get('assunto')->getData())
                        ->setFrom($form->get('email')->getData())
                        ->setTo('almir.amjunior@gmail.com')
//                        ->setTo('almir@valeservicefarma.com.br')
                        ->setBody($this->renderView('FranbellaSiteBundle:Page:email.html.twig', 
                                array('contato' => $contato)))
                        ->setContentType("text/html")//;
                        ->setBody($form->get('mensagem')->getData());
                $this->get('mailer')->send($email);
                
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
        
        $uf = $this->get('request')->query->get('data');
        $cidade = $this->get('request')->query->get('cidade');
        
        $uf = $uf == NULL ? "" : $uf;
        $cidade = $cidade == NULL ? "" : $cidade;
        
        //var_dump($uf);
        
        $cidades = "";
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $estados = $em->getRepository('FranbellaAdminBundle:PDV')
                    ->listarTodosEstados();
        
        $arrayEstados = array();
        
        foreach ($estados as $estado) {
            $estadosArray[$estado['uf']] = $estado['uf'];
        }
        
        $form = $this->createFormBuilder()
                ->add('estado', 'choice', 
                        array(
                            'label' => 'Estado: ',
//                            'class' => 'BFOSBrasilBundle:Cidade',
//                            'property' => 'uf',
                            'empty_value' => '--------------',
                            'choices' => $estadosArray,
                            'label_attr' => array(
                                'class' => 'label_form'
                            )
                        ))
                ->add('cidade', 'choice', array(
                            'label' => 'Cidade: ',
//                            'class' => 'BFOSBrasilBundle:Cidade',
//                            'property' => 'nome',
                            'empty_value' => '--------------',
//                            'choices' => $cidades,
                            'label_attr' => array(
                                'class' => 'label_form'
                            )
                        ))
                ->add('bairro', 'choice', array(
                            'label' => 'Bairro: ',
//                            'class' => 'FranbellaAdminBundle:PDV',
//                            'property' => 'bairro',
                            'empty_value' => 'Todos',
//                            'choices' => $bairros,
                                'required' => false,
                            'label_attr' => array(
                                'class' => 'label_form'
                            )
                        ))
                ->add('tipoPDV', 'entity', array(
                    'class' => 'FranbellaAdminBundle:TipoPDV',
                    'empty_value' => 'Todos',
                    'property' => 'nome',
                    'label' => 'Procura Por?',
                    'required' => false,
                    'label_attr' => array(
                        'class' => 'label_form'
                    )
                ))
                ->getForm();
        
        return $this
                ->render('FranbellaSiteBundle:Page:ondeEncontro.html.twig', 
                        array(
                            'estados' => $estados,
                            'form' => $form->createView()
                        ));
    }
    
    public function carregaCidadeAction()
    {
        
        $uf = $this->get('request')->query->get('data');
        
        $uf = $uf == NULL ? "" : $uf;
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $estados = $em->getRepository('FranbellaAdminBundle:PDV')
                    ->listarTodosEstados();
        
        $cidades = $em->getRepository('FranbellaAdminBundle:PDV')->listarTodasCidadesPorEstado($uf);
        
        $form = $this->createFormBuilder()
                ->add('cidade', 'entity', array(
                            'label' => 'Cidade: ',
                            'class' => 'BFOSBrasilBundle:Cidade',
                            'property' => 'nome',
                            'empty_value' => '--------------',
                            'choices' => $cidades,
                            'label_attr' => array(
                                'class' => 'label_form'
                            )
                        ))
                ->getForm();
        
        return $this
                ->render('FranbellaSiteBundle:Page:ondeEncontro.html.twig', 
                        array(
                            'estados' => $estados,
                            'form' => $form->createView()
                        ));
    }
    
    public function carregaBairroAction()
    {
        $cidade = $this->get('request')->query->get('cidade');

        $cidade = $cidade == NULL ? "" : $cidade;
        
        $cidades = "";
        
        $em = $this->getDoctrine()
                   ->getEntityManager();

//        $estados = $em->getRepository('FranbellaSiteBundle:Estado')
//                    ->listarTodosAtivos();
        
        $estados = $em->getRepository('FranbellaAdminBundle:PDV')
                    ->listarTodosEstados();
        
        $bairros = $em->getRepository('FranbellaAdminBundle:PDV')->listarTodosBairrosPorCidade($cidade);
        
//        var_dump($bairros);
        
        $bairrosArray = array();
        
        foreach ($bairros as $bairro) {
            $bairrosArray[$bairro->getBairro()] = $bairro->getBairro();
        }
        
//        var_dump($bairrosArray);
        
        $form = $this->createFormBuilder()
                ->add('bairro', 'choice', array(
                            'label' => 'Bairro: ',
//                            'class' => 'FranbellaAdminBundle:PDV',
//                            'property' => 'bairro',
                            'empty_value' => 'Todos',
                            'choices' => $bairrosArray,
                            'required' => false,
                            'label_attr' => array(
                                'class' => 'label_form'
                            )
                        ))
                ->getForm();
        
        return $this
                ->render('FranbellaSiteBundle:Page:ondeEncontro.html.twig', 
                        array(
                            'estados' => $estados,
                            'form' => $form->createView()
                        ));
    }
    
    public function encontroBuscaAction()
    {
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $request = $this->getRequest();
        
        $cidade = $request->get('form')['cidade'];
        $bairro = $request->get('form')['bairro'];
        $tipoPDV = $request->get('form')['tipoPDV'];
        
        $bairro = $bairro == NULL ? "-1" : $bairro;
        $tipoPDV = $tipoPDV == NULL ? "-1" : $tipoPDV;
        
        $pdvs = $em->getRepository('FranbellaAdminBundle:PDV')
                        ->listarTodosPDVsPorCidadeETipo($cidade, $bairro, $tipoPDV);
        
//                foreach($pdvs as $pdv){
//                    echo "Razão Social: " . $pdv->getRazaoSocial();
//                }
        
        return $this
                ->render('FranbellaSiteBundle:Page:pdvs.html.twig', 
                        array(
                            'pdvs' => $pdvs
                        ));
        
    }
    
    public function distribuidorAction()
    {
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $distribuidores = $em->getRepository('FranbellaAdminBundle:Distribuidor')
                    ->listarTodos();
        
        $distribuidor = new Distribuidor();
        $form = $this->createForm(new DistribuidorType(), $distribuidor);
        
        

        return $this
                ->render('FranbellaSiteBundle:Page:distribuidor.html.twig', 
                        array(
                            'form' => $form->createView(),
                            'distribuidores' => $distribuidores
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

    $conexao = new Conexao();

    $itens = json_decode(str_replace('\\', '', $_POST['itens']));

    $conexao->conecta();

    //$query = "DELETE FROM vendas /*WHERE data_cadastro < DATE_ADD(NOW(), INTERVAL -2 WEEK)*/";
    //mysql_query($query) or die("Erro ao limpar registros.");

//    $query = $em->createQuery('DELETE FranbellaSiteBundle:Venda v '
//            . 'WHERE data_cadastro < DATE_ADD(NOW(), INTERVAL -2 WEEK)');
    
    //$query->execute();
    
    $query = "";
    
    foreach ($itens as $item) {
        
        $query = "CALL grava_pdv_importado ('" .$item->razao_social. "', '" .$item->fantasia. "', " .$item->tipo. ", '"
                .$item->codIBGE. "', '" .$item->bairro. "', '".$item->endereco. "', '".$item->numero. "', '"
                .$item->complemento. "', '".$item->cep. "', '".$item->tel. "')"; 
        
        mysql_query($query);
        
        //echo $query;
        /*
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
        */
        
        //mysql_query($queryProduto) or die("Erro ao cadastrar produto");
    }
    
    //$conexao->desconecta();
    
        return new Response($query);
        //return $this->render('FranbellaSiteBundle:Page:grava.html.php');
    }
    
}