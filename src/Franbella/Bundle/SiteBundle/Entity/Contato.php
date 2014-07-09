<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contato
 *
 * @author ajunior
 */

namespace Franbella\Bundle\SiteBundle\Entity;

use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class Contato {
    
    private $id;
    private $assunto;
    private $nome;
    private $email;
    private $telefone;
    private $cidade;
    private $uf;
    private $mensagem;
    
    public function getId() {
        return $this->id;
    }

    public function getAssunto() {
        return $this->assunto;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getUf() {
        return $this->uf;
    }

    public function getMensagem() {
        return $this->mensagem;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setAssunto($assunto) {
        $this->assunto = $assunto;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setUf($uf) {
        $this->uf = $uf;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }
    
    public static function loadValidatorMetadata(ClassMetadata $metadata) {
        $metadata->addPropertyConstraint('assunto', new NotBlank());
        $metadata->addPropertyConstraint('nome', new NotBlank());
        $metadata->addPropertyConstraint('email', 
                new Email(
                        array('checkMX' => true, 
                            'checkHost' => true)
                        )
                );
        $metadata->addPropertyConstraint('email', new NotBlank());
        $metadata->addPropertyConstraint('telefone', new NotBlank());
        $metadata->addPropertyConstraint('cidade', new NotBlank());
        $metadata->addPropertyConstraint('uf', new NotBlank());
        $metadata->addPropertyConstraint('mensagem', new NotBlank());
    }
    
}
