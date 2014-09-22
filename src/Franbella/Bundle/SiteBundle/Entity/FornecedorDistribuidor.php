<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\SiteBundle\Entity;

/**
 * Description of FornecedorDistribuidor
 *
 * @author ajunior
 */
class FornecedorDistribuidor {
    
    private $id;
    private $distribuidor;
    private $fornecedor;
    
    public function getId() {
        return $this->id;
    }

    public function getDistribuidor() {
        return $this->distribuidor;
    }

    public function getFornecedor() {
        return $this->fornecedor;
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
    
}
