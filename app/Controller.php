<?php
abstract class Controller
{
    public function loadModel(string $model)
    {
       require_once ('../app/models/'.$model.'.php');
       $this->$model = new $model();
    }
}