<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['password'];

        $validacao = Validacao::validar([
            'nome'=>['required', 'min:3'],
            'email'=>['required', 'email', 'unique'],
            'password'=>['required', 'min:8', 'max:35','strong']
        ], $_POST);

        if($validacao->naoPassou('cadastrar')){
            header('location: /cadastro');
            exit();
        }
    
        $database->query(
            query: "insert into usuarios (nome, email, senha) values(:nome, :email, :senha)",
            params: ['nome'=>$nome, 'email'=>$email, 'senha'=>password_hash($senha, PASSWORD_DEFAULT)]
        );

        flashMessage()->push('sucesso', "Conta cadastrada com sucesso!👍");
    }

    view('cadastro');
?>