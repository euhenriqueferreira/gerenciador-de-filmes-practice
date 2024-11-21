<?php

    $id = explode('=', parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY))[1];
    
    $filme = $database->query(
        query: "
        SELECT filmes.id, filmes.titulo, filmes.categoria, filmes.ano_de_lancamento, filmes.descricao, filmes.usuario_id, filmes.foto,
        IFNULL(SUM(avaliacoes.nota) / COUNT(avaliacoes.nota), 0) AS nota_media, IFNULL(count(avaliacoes.id),0) as nro_avaliacoes
        FROM filmes LEFT JOIN avaliacoes ON filmes.id = avaliacoes.filme_id WHERE filmes.id = :id",
        class: Filme::class,
        params: compact('id')
    )->fetch();

    $avaliacoes = $database->query(
        query: "select 
                avaliacoes.id, avaliacoes.usuario_id, avaliacoes.filme_id, avaliacoes.nota, avaliacoes.avaliacao, usuarios.id, usuarios.nome
                from avaliacoes left join usuarios where filme_id = :filme_id and usuario_id = usuarios.id",
        class: Avaliacao::class,
        params: ['filme_id'=>$filme->id]
    )->fetchAll();

    $numAvaliacoesPorUsuario = $database->query(
        query: "select usuarios.id, ifnull(count(usuarios.id), 0) as nro_avaliacoes from usuarios left join avaliacoes on usuarios.id = avaliacoes.usuario_id group by usuarios.id",
        class: Usuario::class
    )->fetchAll();

    // dd($numAvaliacoesPorUsuario);

    // dd($avaliacoes);

    view('filme', compact('filme', 'avaliacoes', 'numAvaliacoesPorUsuario'));
?>