<?php


        class Database{
            
            private $db;

            public function __construct($config)
            {
                $this->db = new PDO($config);
            }

            public function query($query, $class = null, $params = []){
                // Prepara a query de acordo com a string da query recebida por parâmetro
                $prepare = $this->db->prepare($query);

                /* 
                    Se foi passada uma classe por parâmetro, ele faz o mapeamento
                    do resultado da query para objetos dessa classe
                */
                if($class){
                    $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
                }
    
                // Executa a query e passa os $params
                $prepare->execute($params);
    
                return $prepare;
            }


        }

        $database = new Database("sqlite:database.sqlite");
?>