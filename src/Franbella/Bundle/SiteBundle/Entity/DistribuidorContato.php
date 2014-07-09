<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Distribuidor
 *
 * @author ajunior
 */

/**
 * @ORM\Entity(repositoryClass="Franbella\Bundle\SiteBundle\Entity\Repository\DistribuidorContatoRepository")
 * @ORM\Table(name="distribuidor_contato")
 * @ORM\HasLifecycleCallbacks()
 */
class DistribuidorContato {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $cidade;
    
    /**
     * @ORM\Column(type="text")
     */
    private $comentario;
    
    /**
     * @ORM\ManyToOne(targetEntity="TipoNegocio")
     * @ORM\JoinColumn(name="id_negocio", referencedColumnName="id")
     */
    private $negocio;
    

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
     * Set cidade
     *
     * @param integer $cidade
     * @return DistribuidorContato
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    
        return $this;
    }

    /**
     * Get cidade
     *
     * @return integer 
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return DistribuidorContato
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;
    
        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set negocio
     *
     * @param \Franbella\Bundle\SiteBundle\Entity\TipoNegocio $negocio
     * @return DistribuidorContato
     */
    public function setNegocio(\Franbella\Bundle\SiteBundle\Entity\TipoNegocio $negocio = null)
    {
        $this->negocio = $negocio;
    
        return $this;
    }

    /**
     * Get negocio
     *
     * @return \Franbella\Bundle\SiteBundle\Entity\TipoNegocio 
     */
    public function getNegocio()
    {
        return $this->negocio;
    }
}