<?php 
namespace mvc\Models;

use mvc\Core\ResaurceModel;
use mvc\Models\Nhanvien;

class NhanvienResaurceModel extends ResaurceModel
{
    function __construct($table, $id, $nhanvien)
    {
        parent::_init($table, $id, $nhanvien);
    }
}
