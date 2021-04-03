<?php
namespace MVC\core;

    class Model
    {
        public function getProperties()
        {
            return get_object_vars($this);
        }
    }
