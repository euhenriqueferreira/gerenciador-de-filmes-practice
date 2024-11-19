<?php

    $id = explode('=', parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY))[1];
    
    $filme = $database->query(
        query: "select * from filmes where id = :id",
        class: Filme::class,
        params: compact('id')
    )->fetch();

    view('filme', compact('filme'));
?>