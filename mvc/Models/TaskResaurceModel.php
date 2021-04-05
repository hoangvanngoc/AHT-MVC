<?php 
namespace MVC\Models;

use MVC\core\ResaurceModel;
use MVC\Models\Task;

class TaskResaurceModel extends ResaurceModel
{
    function __construct($table, $id, $tasks)
    {
        parent::_init($table, $id, $tasks);
    }
}
