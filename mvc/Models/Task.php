<?php
namespace MVC\Models;

use MVC\core\Model;

class Task extends Model
{
    public $id;
    public $title;
    public $description ;

    function __set($name, $value)
    {
        $this->{$name} = $value;
    }

    function __get($name)
    {
        $this->{$name};
    }
}
