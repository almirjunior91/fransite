<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of DistribuidorFornecedor
 *
 * @author ajunior
 */

/**
 * @ORM\Entity(repositoryClass="Franbella\Bundle\SiteBundle\Entity\Repository\DistribuidorFornecedorRepository")
 * @ORM\Table(name="distribuidor_fornecedor")
 * @ORM\HasLifecycleCallbacks()
 */
class DistribuidorFornecedor {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Distribuidor", inversedBy="fornecedores")
     * @ORM\JoinColumn(name="id_distribuidor", referencedColumnName="id")
     */
    private $distribuidor;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $fornecedor;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $contato;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $telefone;
    
    public function getId() {
        return $this->id;
    }

    public function getDistribuidor() {
        return $this->distribuidor;
    }

    public function getFornecedor() {
        return $this->fornecedor;
    }

    public function getContato() {
        return $this->contato;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDistribuidor($distribuidor) {
        $this->distribuidor = $distribuidor;
    }

    public function setFornecedor($fornecedor) {
        $this->fornecedor = $fornecedor;
    }

    public function setContato($contato) {
        $this->contato = $contato;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    
}