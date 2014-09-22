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

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Franbella\Bundle\SiteBundle\Entity\Repository\ContatoRepository")
 * @ORM\Table(name="contato")
 * @ORM\HasLifecycleCallbacks()
 */
class Contato {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $assunto;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nome;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;
    
    /**
     * @ORM\Column(type="string", length=15)
     */
    private $telefone;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $cidade;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $uf;
    
    /**
     * @ORM\Column(type="text")
     */
    private $mensagem;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $lida = false;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $dataEnvio;
    
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
        $metadata->addPropertyConstraint('assunto', new NotBlank(
                array("message" => "Por favor, preencha o assunto.")
                )
        );
        $metadata->addPropertyConstraint('nome', new NotBlank(
                array("message" => "Por favor, preencha seu nome.")
                )
        );
        $metadata->addPropertyConstraint('email', 
                new Email(
                        array('checkMX' => true, 
                            'checkHost' => true)
                        )
                );
        $metadata->addPropertyConstraint('email', new NotBlank(
                array("message" => "Por favor, preencha seu email.")
                )
         );
        $metadata->addPropertyConstraint('telefone', new NotBlank(
                array("message" => "Por favor, preencha seu telefone.")
                )
        );
        $metadata->addPropertyConstraint('cidade', new NotBlank(
                array("message" => "Por favor, informe sua cidade.")
                )
        );
        $metadata->addPropertyConstraint('uf', new NotBlank(
                array("message" => "Por favor, informe seu estado.")
                )
        );
        $metadata->addPropertyConstraint('mensagem', new NotBlank(
                array("message" => "Por favor, digite sua mensagem.")
                )
        );
    }
    

    /**
     * Set lida
     *
     * @param boolean $lida
     * @return Contato
     */
    public function setLida($lida)
    {
        $this->lida = $lida;
    
        return $this;
    }

    /**
     * Get lida
     *
     * @return boolean 
     */
    public function getLida()
    {
        return $this->lida;
    }

    /**
     * Set dataEnvio
     *
     * @param \DateTime $dataEnvio
     * @return Contato
     */
    public function setDataEnvio($dataEnvio)
    {
        $this->dataEnvio = $dataEnvio;
    
        return $this;
    }

    /**
     * Get dataEnvio
     *
     * @return \DateTime 
     */
    public function getDataEnvio()
    {
        return $this->dataEnvio;
    }
}