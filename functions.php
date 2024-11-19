<?php

    function dd($content){
        echo '<pre>';
        var_dump($content);
        echo '</pre>';
        die();
    }

    function abort($code){
        http_response_code($code);
        require "controllers/$code.controller.php";
        exit();
    }

    function view($view, $dados = []){
        /*
            Cria variaveis com o $key = $value dinamicamente;
        */
        foreach ($dados as $key => $value) {
            $$key = $value;
        }
        
        require 'views/templates/app.php';
    }

    function flashMessage(){
        return new Flash;
    }

    function auth(){
        if(isset($_SESSION['auth'])){
            return $_SESSION['auth'];
        }

        return false;
    }
?>