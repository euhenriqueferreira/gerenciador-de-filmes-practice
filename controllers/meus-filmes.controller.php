<?php
    $pesquisa = $_REQUEST['pesquisar'] ?? '';

    // $filmes = $database->query(
    //      query: "select * from filmes where titulo like :pesquisar and usuario_id = :id",
    //      class: Filme::class,
    //      params: ['pesquisar'=>"%$pesquisa%", 'id'=>auth()->id]
    // )->fetchAll(); 

    $filmes = $database->query(
        query: "
            SELECT f.id, f.foto, f.titulo, f.categoria, f.ano_de_lancamento, f.descricao, 
            IFNULL(SUM(a.nota) / COUNT(a.nota), 0) AS nota_media 
            FROM filmes AS f
            LEFT JOIN avaliacoes AS a ON f.id = a.filme_id
            WHERE f.titulo LIKE :pesquisar and f.usuario_id = :usuario_id
            GROUP BY f.id, f.titulo, f.categoria, f.ano_de_lancamento, f.descricao;
        ",
        class: Filme::class,
        params: ['pesquisar'=>"%$pesquisa%", 'usuario_id'=>auth()->id]
    )->fetchAll();

    view('meus-filmes', compact('pesquisa', 'filmes'));
?>