<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = $_POST['email'];
        $senha = $_POST['password'];

        $validacao = Validacao::validar([
            'email'=>['required', 'email'],
            'password'=>['required', 'min:8', 'max:35','strong']
        ], $_POST);

        if($validacao->naoPassou('logar')){
            header('location: /login');
            exit();
        }

        
        $usuario = $database->query(
            query: "select * from usuarios where email = :email",
            class: Usuario::class,
            params: ['email'=>$email]
        )->fetch();
        // dd($usuario);

        if($usuario){
            if((password_verify($senha, $usuario->senha))){
                // Registrar na sessão
                $_SESSION['auth'] = $usuario;


                header('location: /');
                exit();
            }
        }
    }
    

    view('login');
?>