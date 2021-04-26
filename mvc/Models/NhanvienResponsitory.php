<?php 
namespace mvc\Models;

class NhanvienResponsitory
{
    protected $nvResaurceModel;

    // khởi tạo và truyền vào giá trị 
    public function __construct()
    {
        $this->nvResaurceModel = new TaskResaurceModel('nhanvien', null, new Nhanvien);
    }

    public function add($model) 
    {
        return  $this->nvResaurceModel->save($model);
    }

    public function edit($model)
    {
        return $this->nvResaurceModel->save($model);
    }

    public function delete($model)
    {
        return $this->nvResaurceModel->delete($model);     
    }

    public function get($id)
    {
        return $this->nvResaurceModel->find($id);
    }

    public function getAll($model)
    {
        return $this->nvResaurceModel->all($model);
    }
}