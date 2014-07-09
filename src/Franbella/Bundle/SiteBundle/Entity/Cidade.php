<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Cidade
 *
 * @author ajunior
 */

/**
 * @ORM\Entity(repositoryClass="Franbella\Bundle\SiteBundle\Entity\Repository\CidadeRepository")
 * @ORM\Table(name="cidade")
 * @ORM\HasLifecycleCallbacks()
 */
class Cidade {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nome;
    
    /**
     * @ORM\ManyToOne(targetEntity="Estado", inversedBy="cidades")
     * @ORM\JoinColumn(name="id_estado", referencedColumnName="id")
     */
    private $estado;
    

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
     * Set nome
     *
     * @param string $nome
     * @return Cidade
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
     * Set estado
     *
     * @param \Franbella\Bundle\SiteBundle\Entity\Estado $estado
     * @return Cidade
     */
    public function setEstado(\Franbella\Bundle\SiteBundle\Entity\Estado $estado = null)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return \Franbella\Bundle\SiteBundle\Entity\Estado 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}