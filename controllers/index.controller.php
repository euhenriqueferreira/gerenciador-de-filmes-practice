<?php
    $pesquisa = $_REQUEST['pesquisar'] ?? '';

    $filmes = $database->query(
        query: "select * from filmes where titulo like :pesquisar",
        class: Filme::class,
        params: ['pesquisar'=>"%$pesquisa%"]
    )->fetchAll();
    
    view('index', compact('filmes', 'pesquisa'));
?>