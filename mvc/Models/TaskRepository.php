<?php 
namespace MVC\Models;

use MVC\Models\TaskResaurceModel;

class TaskRepository
{
    protected $taskResaurceModel;

    // khởi tạo và truyền vào giá trị 
    public function __construct()
    {
        $this->taskResaurceModel = new TaskResaurceModel('tasks', null, new Task);
    }

    public function add($model) 
    {
        return  $this->taskResaurceModel->save($model);
    }

    public function edit($model)
    {
        return $this->taskResaurceModel->save($model);
    }

    public function delete($model)
    {
        return $this->taskResaurceModel->delete($model);     
    }

    public function get($id)
    {
        return $this->taskResaurceModel->find($id);
    }

    public function getAll($model)
    {
        return $this->taskResaurceModel->all($model);
    }
}