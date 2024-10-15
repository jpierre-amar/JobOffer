<?php


function loadController( string $controller)
{
    if(file_exists('controller/'. $controller .'.php'))
    {

        require_once 'controller/'. $controller . '.php';
    }
}

spl_autoload_register('loadController');


function loadModel(string $model)
{
    if(file_exists('models/'.$model.'.php'))
    {
        require_once 'models/'.$model.'.php';
    }
}

spl_autoload_register('loadModel');


function loadClass(string $class)
{
    if(file_exists('entity/'.$class.'.php'))
    {
        require_once 'entity/'.$class.'.php';
    }
}

spl_autoload_register('loadClass');


