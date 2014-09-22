<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of PDV
 *
 * @author ajunior
 */

/**
 * @ORM\Entity(repositoryClass="Franbella\Bundle\AdminBundle\Entity\Repository\PDVRepository")
 * @ORM\Table(name="pdv")
 * @ORM\HasLifecycleCallbacks()
 */
class PDV {
    
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
     * @ORM\ManyToOne(targetEntity="TipoPDV")
     * @ORM\JoinColumn(name="id_tipo_pdv", referencedColumnName="id")
     */
    private $tipoPdv;
    
    /**
     * @ORM\Column(type="string", length=200)
     */
    private $rua;
    
    /**
     * @ORM\Column(type="string", length=10)
     */
    private $numero;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $complemento;
    
    /**
     * @ORM\Column(type="string", length=10)
     */
    private $cep;
    
    /**
     * @ORM\ManyToOne(targetEntity="BFOS\BrasilBundle\Entity\Cidade")
     * @ORM\JoinColumn(name="id_cidade", referencedColumnName="id")
     */
    private $cidade;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $bairro;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $telefone;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $data_cadastro;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $ultimaAlteracao;

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
     * @return PDV
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
     * @return PDV
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
     * Set tipoPdv
     *
     * @param \Franbella\Bundle\AdminBundle\Entity\TipoPDV $tipoPdv
     * @return PDV
     */
    public function setTipoPdv(\Franbella\Bundle\AdminBundle\Entity\TipoPDV $tipoPdv = null)
    {
        $this->tipoPdv = $tipoPdv;
    
        return $this;
    }

    /**
     * Get tipoPdv
     *
     * @return \Franbella\Bundle\AdminBundle\Entity\TipoPDV 
     */
    public function getTipoPdv()
    {
        return $this->tipoPdv;
    }

    /**
     * Set cidade
     *
     * @param \BFOS\BrasilBundle\Entity\Cidade $cidade
     * @return PDV
     */
    public function setCidade(\BFOS\BrasilBundle\Entity\Cidade $cidade = null)
    {
        $this->cidade = $cidade;
    
        return $this;
    }

    /**
     * Get cidade
     *
     * @return \BFOS\BrasilBundle\Entity\Cidade 
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set bairro
     *
     * @param string $bairro
     * @return PDV
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
     * Set data_cadastro
     *
     * @param \DateTime $dataCadastro
     * @return PDV
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

    /**
     * Set rua
     *
     * @param string $rua
     * @return PDV
     */
    public function setRua($rua)
    {
        $this->rua = $rua;
    
        return $this;
    }

    /**
     * Get rua
     *
     * @return string 
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return PDV
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
     * @return PDV
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
     * Set cep
     *
     * @param string $cep
     * @return PDV
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
     * @ORM\PreUpdate
     */
    public function setDataAlteracao()
    {
       $this->setUltimaAlteracao(new \DateTime());
    }

    /**
     * Set ultimaAlteracao
     *
     * @param \DateTime $ultimaAlteracao
     * @return PDV
     */
    public function setUltimaAlteracao($ultimaAlteracao)
    {
        $this->ultimaAlteracao = $ultimaAlteracao;
    
        return $this;
    }

    /**
     * Get ultimaAlteracao
     *
     * @return \DateTime 
     */
    public function getUltimaAlteracao()
    {
        return $this->ultimaAlteracao;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     * @return PDV
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    
        return $this;
    }

    /**
     * Get telefone
     *
     * @return string 
     */
    public function getTelefone()
    {
        return $this->telefone;
    }
}