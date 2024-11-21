<?php

    if(!auth()){
        abort(403);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $filme_id = $_REQUEST['id'];
        $usuario_id = auth()->id;
        $nota = $_POST['nota'];
        $avaliacao = $_POST['avaliacao'];


        $validacao = Validacao::validar([
            'nota'=>['required'],
            'avaliacao'=>['required', 'min:4']
        ], $_POST);

        if($validacao->naoPassou('criar_avaliacao')){
            header("location: /filme?id=$filme_id");
            exit();
        }

        $database->query(
            query: "insert into avaliacoes (usuario_id, filme_id, nota, avaliacao)
                    values (:usuario_id , :filme_id, :nota, :avaliacao)",
            params: compact('usuario_id', 'filme_id', 'nota', 'avaliacao')
        );
    }
    header("location: /filme?id=$filme_id");
?>