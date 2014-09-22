<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\SiteBundle\Entity;

/**
 * Description of Fornecedor
 *
 * @author ajunior
 */
class Fornecedor {
    
    private $id;
    private $razao_social;
    private $contato;
    private $telefone;
    
    public function getId() {
        return $this->id;
    }

    public function getRazao_social() {
        return $this->razao_social;
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

    public function setRazao_social($razao_social) {
        $this->razao_social = $razao_social;
    }

    public function setContato($contato) {
        $this->contato = $contato;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    
}
