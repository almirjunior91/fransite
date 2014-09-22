<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Agenda
 *
 * @author ajunior
 */

/**
 * @ORM\Entity(repositoryClass="Franbella\Bundle\AdminBundle\Entity\Repository\AgendaRepository")
 * @ORM\Table(name="agenda")
 * @ORM\HasLifecycleCallbacks()
 */
class Agenda {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string")
     */
    private $nome;
    
    /**
     * @ORM\ManyToOne(targetEntity="BFOS\BrasilBundle\Entity\Cidade")
     * @ORM\JoinColumn(name="id_cidade", referencedColumnName="id")
     */
    private $cidade;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $dataInicial;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $dataFinal;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $capa;
    
    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;
    
    /**
     * @ORM\OneToMany(targetEntity="AgendaFoto", mappedBy="agenda")
     */
    private $fotos;
    
    private $temp;

    
    public function getAbsolutePath()
    {
        return null === $this->capa
            ? null
            : $this->getUploadRootDir().'/'.$this->capa;
    }

    public function getWebPath()
    {
        return null === $this->capa
            ? null
            : $this->getUploadDir().'/'.$this->capa;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/evento';
    }
    
    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        // check if we have an old image path
        if (isset($this->capa)) {
            // store the old name to delete after the update
            $this->temp = $this->capa;
            $this->capa = null;
        } else {
            $this->capa = 'initial';
        }
    }
    
    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {
            // do whatever you want to generate a unique name
            $filename = sha1(uniqid(mt_rand(), true));
            $this->capa = $filename.'.'.$this->getFile()->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->getFile()->move($this->getUploadRootDir(), $this->capa);

        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->temp);
            // clear the temp image path
            $this->temp = null;
        }
        $this->file = null;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
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
     * Set cidade
     *
     * @param Cidade $cidade
     * @return Distribuidor
     */
    public function setCidade(\BFOS\BrasilBundle\Entity\Cidade $cidade = null)
    {
        $this->cidade = $cidade;
    
        return $this;
    }

    /**
     * Get cidade
     *
     * @return Cidade 
     */
    public function getCidade()
    {
        return $this->cidade;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getDataInicial() {
        return $this->dataInicial;
    }

    public function getDataFinal() {
        return $this->dataFinal;
    }

    public function getCapa() {
        return $this->capa;
    }

    public function getTemp() {
        return $this->temp;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setDataInicial($dataInicial) {
        $this->dataInicial = $dataInicial;
    }

    public function setDataFinal($dataFinal) {
        $this->dataFinal = $dataFinal;
    }

    public function setCapa($capa) {
        $this->capa = $capa;
    }

    public function setTemp($temp) {
        $this->temp = $temp;
    }


    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fotos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add fotos
     *
     * @param \Franbella\Bundle\AdminBundle\Entity\AgendaFoto $fotos
     * @return Agenda
     */
    public function addFoto(\Franbella\Bundle\AdminBundle\Entity\AgendaFoto $fotos)
    {
        $this->fotos[] = $fotos;
    
        return $this;
    }

    /**
     * Remove fotos
     *
     * @param \Franbella\Bundle\AdminBundle\Entity\AgendaFoto $fotos
     */
    public function removeFoto(\Franbella\Bundle\AdminBundle\Entity\AgendaFoto $fotos)
    {
        $this->fotos->removeElement($fotos);
    }

    /**
     * Get fotos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFotos()
    {
        return $this->fotos;
    }
}