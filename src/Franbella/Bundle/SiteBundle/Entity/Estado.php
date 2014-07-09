<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Estado
 *
 * @author ajunior
 */

/**
 * @ORM\Entity(repositoryClass="Franbella\Bundle\SiteBundle\Entity\Repository\EstadoRepository")
 * @ORM\Table(name="estado")
 * @ORM\HasLifecycleCallbacks()
 */
class Estado {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $sigla;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nome;
    
    /**
     * @ORM\OneToMany(targetEntity="Cidade", mappedBy="Cidade")
     */
    protected $cidades;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $ativo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cidades = new \Doctrine\Common\Collections\ArrayCollection();
        //cadastra-se como ativo
        $this->ativo = 0;
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
     * Set sigla
     *
     * @param string $sigla
     * @return Estado
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;
    
        return $this;
    }

    /**
     * Get sigla
     *
     * @return string 
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Estado
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    
        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Add cidades
     *
     * @param \Franbella\Bundle\SiteBundle\Entity\Cidade $cidades
     * @return Estado
     */
    public function addCidade(\Franbella\Bundle\SiteBundle\Entity\Cidade $cidades)
    {
        $this->cidades[] = $cidades;
    
        return $this;
    }

    /**
     * Remove cidades
     *
     * @param \Franbella\Bundle\SiteBundle\Entity\Cidade $cidades
     */
    public function removeCidade(\Franbella\Bundle\SiteBundle\Entity\Cidade $cidades)
    {
        $this->cidades->removeElement($cidades);
    }

    /**
     * Get cidades
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCidades()
    {
        return $this->cidades;
    }

    /**
     * Set ativo
     *
     * @param integer $ativo
     * @return Estado
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    
        return $this;
    }

    /**
     * Get ativo
     *
     * @return integer 
     */
    public function getAtivo()
    {
        return $this->ativo;
    }
}