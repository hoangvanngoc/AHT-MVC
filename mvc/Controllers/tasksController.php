<?php
namespace MVC\Controllers;

use MVC\Models\Task;
use MVC\core\Controller;
use MVC\Models\TaskRepository;

class tasksController extends Controller
{

    /** 
    * index show 
    *
    *
    *
    */
 
    public function index() 
    {
        $tasks = new Task();
        $taskRespository = new TaskRepository();

        $d['tasks'] = $taskRespository->getAll($tasks);
        $this->set($d);
        $this->render("index");     
    }

    public function create()
    {
        if(!empty(isset($_POST['title'])) && !empty(isset($_POST['description'])) ){
            $tasks = new Task();
            $taskRespository = new TaskRepository();

            $tasks->title = $_POST['title'];
            $tasks->description = $_POST['description'];  
         
            if($taskRespository->add($tasks)){
                header("location: " . WEBROOT . "tasks/index");
            }
        }
        $this->render("add");
    }


    public function edit($id)
    {
        $tasks = new Task();
        $taskRespository = new TaskRepository();

        $d['tasks'] = $taskRespository->get($id);  

        if(isset($_POST['title'])){    
            $tasks->id = $id;   
            $tasks->title = $_POST['title'];
            $tasks->description = $_POST['description'];
            
            if($taskRespository->edit($tasks)){
                header("location:" . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    public function delete($id)
    {
        $tasks = new Task();
        $taskRespository = new TaskRepository();
        $tasks->id = $id;

        if($taskRespository->delete($tasks)){
            header("location:" . WEBROOT . "tasks/index");
        }  
    }
    
}
