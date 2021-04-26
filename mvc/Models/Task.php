<?php
namespace mvc\Models;

use mvc\Core\Model;

class Task extends Model
{
   protected $id;
   protected $title;
   protected $description;



    public function setId($id)
    {
       $this->id = $id; 
    }

    public function setTitle($title)
    {
       $this->title = $title;
    }

    public function setDsc($description)
    {
       $this->description = $description;
    }

    public function getId()
    {
      return $this->id;
    }

    public function getTitle()
    {
     return  $this->title;
    }

    public function getDsc()
    {
     return  $this->description;
    }

}

