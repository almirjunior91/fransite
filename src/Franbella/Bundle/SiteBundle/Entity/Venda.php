<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Venda
 *
 * @author ajunior
 */

/**
 * @ORM\Entity(repositoryClass="Franbella\Bundle\SiteBundle\Entity\Repository\VendaRepository")
 * @ORM\Table(name="vendas")
 * @ORM\HasLifecycleCallbacks()
 */
class Venda {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $razaoSocial;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $fantasia;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $tipo;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $cep;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $endereco;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $numero;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $complemento;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $bairro;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $cidade;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $uf;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $data_cadastro;
    
    public function __construct() {
        $this->setDataCadastro(new \DateTime());
    }
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set razaoSocial
     *
     * @param string $razaoSocial
     * @return Venda
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
    
        return $this;
    }

    /**
     * Get razaoSocial
     *
     * @return string 
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set fantasia
     *
     * @param string $fantasia
     * @return Venda
     */
    public function setFantasia($fantasia)
    {
        $this->fantasia = $fantasia;
    
        return $this;
    }

    /**
     * Get fantasia
     *
     * @return string 
     */
    public function getFantasia()
    {
        return $this->fantasia;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Venda
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set cep
     *
     * @param string $cep
     * @return Venda
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    
        return $this;
    }

    /**
     * Get cep
     *
     * @return string 
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     * @return Venda
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    
        return $this;
    }

    /**
     * Get endereco
     *
     * @return string 
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Venda
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set complemento
     *
     * @param string $complemento
     * @return Venda
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    
        return $this;
    }

    /**
     * Get complemento
     *
     * @return string 
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set bairro
     *
     * @param string $bairro
     * @return Venda
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    
        return $this;
    }

    /**
     * Get bairro
     *
     * @return string 
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     * @return Venda
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    
        return $this;
    }

    /**
     * Get cidade
     *
     * @return string 
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set uf
     *
     * @param string $uf
     * @return Venda
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    
        return $this;
    }

    /**
     * Get uf
     *
     * @return string 
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set data_cadastro
     *
     * @param \DateTime $dataCadastro
     * @return Venda
     */
    public function setDataCadastro($dataCadastro)
    {
        $this->data_cadastro = $dataCadastro;
    
        return $this;
    }

    /**
     * Get data_cadastro
     *
     * @return \DateTime 
     */
    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }
}