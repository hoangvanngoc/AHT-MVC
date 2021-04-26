<?php 

namespace mvc\Models;

use mvc\Core\Model;

class Nhanvien extends Model
{
   protected $id;
   protected $name;
 

    public function setIdnv($id)
    {
       $this->id = $id; 
    }

    public function setName($name)
    {
       $this->anme = $name;
    }

    public function getIdnv()
    {
      return $this->id;
    }

    public function getName()
    {
       $this->name;
    }

}
