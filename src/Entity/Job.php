<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JobRepository")
 */
class Job
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $categorie;


    function getTitle(){
      return $this->title;
    }
    function getDescription(){
      return $this->description;
    }
    function getCategorie(){
      return $this->categorie;
    }
    function setTitle($title){
      $this->title = $title;
    }
    function setDescription($description){
      $this->description = $description;
    }
    function setCategorie($categorie){
      $this->categorie = $categorie;
    }

}
