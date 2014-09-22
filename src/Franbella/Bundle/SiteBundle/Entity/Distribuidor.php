<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\SiteBundle\Entity;

use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Mapping\ClassMetadata;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Distribuidor
 *
 * @author ajunior
 */

/**
 * @ORM\Entity(repositoryClass="Franbella\Bundle\SiteBundle\Entity\Repository\DistribuidorRepository")
 * @ORM\Table(name="distribuidor_proposta")
 * @ORM\HasLifecycleCallbacks()
 */
class Distribuidor {

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
     * @ORM\Column(type="string", length=20)
     */
    private $cpfCnpj;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    private $inscricaoEstadual;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    private $telefoneFixo;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    private $celular;
    
    /**
     * @ORM\Column(type="string", nullable=true, length=20)
     */
    private $ramal;
    
    /**
     * @ORM\ManyToOne(targetEntity="TipoNegocio")
     * @ORM\JoinColumn(name="id_negocio", referencedColumnName="id")
     */
    private $areaAtuacao;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $qtdRepresentantes;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $faturamentoBruto;
    
    /**
     * @ORM\Column(type="string")
     */
    private $tipoDistribuidor;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $dataEnvio;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $lida = false;
    
    /**
    * @ORM\OneToMany(targetEntity="DistribuidorFornecedor", mappedBy="distribuidor")
    */
    private $fornecedores;

    public function getId() {
        return $this->id;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function getCpfCnpj() {
        return $this->cpfCnpj;
    }

    public function getInscricaoEstadual() {
        return $this->inscricaoEstadual;
    }

    public function getTelefoneFixo() {
        return $this->telefoneFixo;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function getRamal() {
        return $this->ramal;
    }

    public function getAreaAtuacao() {
        return $this->areaAtuacao;
    }

    public function getQtdRepresentantes() {
        return $this->qtdRepresentantes;
    }

    public function getFaturamentoBruto() {
        return $this->faturamentoBruto;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    public function setCpfCnpj($cpfCnpj) {
        $this->cpfCnpj = $cpfCnpj;
    }

    public function setInscricaoEstadual($inscricaoEstadual) {
        $this->inscricaoEstadual = $inscricaoEstadual;
    }

    public function setTelefoneFixo($telefoneFixo) {
        $this->telefoneFixo = $telefoneFixo;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function setRamal($ramal) {
        $this->ramal = $ramal;
    }

    public function setAreaAtuacao($areaAtuacao) {
        $this->areaAtuacao = $areaAtuacao;
    }

    public function setQtdRepresentantes($qtdRepresentantes) {
        $this->qtdRepresentantes = $qtdRepresentantes;
    }

    public function setFaturamentoBruto($faturamentoBruto) {
        $this->faturamentoBruto = $faturamentoBruto;
    }
    

    /**
     * Set fantasia
     *
     * @param string $fantasia
     * @return Distribuidor
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
    
    public function getTipoDistribuidor() {
        return $this->tipoDistribuidor;
    }

    public function setTipoDistribuidor($tipoDistribuidor) {
        $this->tipoDistribuidor = $tipoDistribuidor;
    }

    
    public static function loadValidatorMetadata(ClassMetadata $metadata) {
        $metadata->addPropertyConstraint('razaoSocial', new NotBlank(
                array('message' => 'Informe Razão Social')
                ));
        $metadata->addPropertyConstraint('fantasia', new NotBlank(
                array('message' => 'Informe Fantasia')
                ));
        $metadata->addPropertyConstraint('cpfCnpj', new NotBlank(
                array('message' => 'Informe Documento')
                ));
        $metadata->addPropertyConstraint('inscricaoEstadual', new NotBlank(
                array('message' => 'Informe Inscrição Estadual')
                ));
        $metadata->addPropertyConstraint('telefoneFixo', new NotBlank(
                array('message' => 'Informe Telefone')
                ));
        $metadata->addPropertyConstraint('celular', new NotBlank(
                array('message' => 'Informe Telefone Celular')
                ));
        $metadata->addPropertyConstraint('areaAtuacao', new NotBlank(
                array('message' => 'Informe Área de Atuação')
                ));
        $metadata->addPropertyConstraint('faturamentoBruto', new NotBlank(
                array('message' => 'Informe Faturamento Bruto')
                ));
    }
    


    /**
     * Set dataEnvio
     *
     * @param \DateTime $dataEnvio
     * @return Distribuidor
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

    /**
     * Set lida
     *
     * @param boolean $lida
     * @return Distribuidor
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
     * Constructor
     */
    public function __construct()
    {
        $this->fornecedores = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add fornecedores
     *
     * @param \Franbella\Bundle\SiteBundle\Entity\DistribuidorFornecedor $fornecedores
     * @return Distribuidor
     */
    public function addFornecedore(\Franbella\Bundle\SiteBundle\Entity\DistribuidorFornecedor $fornecedores)
    {
        $this->fornecedores[] = $fornecedores;
    
        return $this;
    }

    /**
     * Remove fornecedores
     *
     * @param \Franbella\Bundle\SiteBundle\Entity\DistribuidorFornecedor $fornecedores
     */
    public function removeFornecedore(\Franbella\Bundle\SiteBundle\Entity\DistribuidorFornecedor $fornecedores)
    {
        $this->fornecedores->removeElement($fornecedores);
    }

    /**
     * Get fornecedores
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFornecedores()
    {
        return $this->fornecedores;
    }
}