<?php

    if(! auth()){
        abort(403);
    }


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario_id = auth()->id;
        $titulo = $_POST['titulo'];
        $ano_de_lancamento = $_POST['ano_de_lancamento'];
        $categoria = $_POST['categoria'];
        $descricao = $_POST['descricao'];

        $validacao = Validacao::validar([
            // 'foto'=>['required'],
            'titulo'=>['required'],
            'ano_de_lancamento'=>['required'],
            'categoria'=>['required', 'min:3'],
            'descricao'=>['required', 'min:15'],
        ], $_POST);

        if($validacao->naoPassou('cadastrar_filme')){
            header('location: /cadastrar-filme');
            exit();
        }

        $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
        $novoNome = md5(rand());
        $imagem = "images/$novoNome.$extensao";
        move_uploaded_file($_FILES['foto']['tmp_name'], __DIR__ . "/../$imagem");

        $database->query(
            query: "insert into filmes (titulo, categoria, ano_de_lancamento, descricao, usuario_id, foto)
            values(:titulo, :categoria, :ano_de_lancamento, :descricao, :usuario_id, :imagem)",
            params: compact('titulo', 'categoria', 'ano_de_lancamento', 'descricao', 'usuario_id', 'imagem')
        );
    
        flashMessage()->push('sucesso', "Filme cadastrado com sucesso!👍");

        header('location: /meus-filmes');
    }

    view('cadastrar-filme');
?>