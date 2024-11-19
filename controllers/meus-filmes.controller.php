<?php
    $pesquisa = $_REQUEST['pesquisar'] ?? '';

    $filmes = $database->query(
         query: "select * from filmes where titulo like :pesquisar and usuario_id = :id",
         class: Filme::class,
         params: ['pesquisar'=>"%$pesquisa%", 'id'=>auth()->id]
    )->fetchAll(); 

    view('meus-filmes', compact('pesquisa', 'filmes'));
?>