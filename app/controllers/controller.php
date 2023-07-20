<?php

abstract class Controller{
    public function loadModel(string $model){
        require_once ('../app/models/'.$model.'.php');
        $this->$model = new $model();
    }

    public function render(string $file, array $data = []){
        extract($data);
        require_once('../app/vue/'.$file.'/.vue.php');

        /*echo '<pre>';
        var_dump($data);

        echo'</pre>';
        die();*/
    }
}