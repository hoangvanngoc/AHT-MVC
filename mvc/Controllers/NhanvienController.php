<?php
namespace mvc\Controllers;

use mvc\Models\Nhanvien;
use mvc\Core\Controller;
use mvc\Models\NhanvienResponsitory;

class NhanvienController extends Controller
{


 
    public function index() 
    {
        $nhanviens = new Nhanvien();
        $taskRespository = new NhanvienResponsitory();
        
        $b = $taskRespository->getAll($nhanviens);

        var_dump($b);
        die();
 
    
    }  
}
