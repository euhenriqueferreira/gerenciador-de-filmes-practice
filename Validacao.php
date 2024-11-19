<?php
       
        class Validacao{
            public $listaValidacoes = [];

            public static function validar($validacoes, $dados){
                $validacao = new self;

                foreach($validacoes as $campo => $item){
                    $listaValidacoes[$campo] = [];

                    foreach($item as $regra){
                       
                        if(str_contains($regra, ':')){
                            $aux = explode(':', $regra);
                            $regraAux = $aux[0];
                            $limitador = $aux[1];

                            $validacao->$regraAux($campo, $dados[$campo], $limitador);
                        } else{
                            $validacao->$regra($campo, $dados[$campo]);
                        }
                    }
                }
                return $validacao;
            }


            private function required($campo, $valor){
               if(! strlen($valor) > 0){
                    $this->listaValidacoes[$campo][] = "O campo $campo é obrigatório";
               }
            }

            private function email($campo, $valor){
                if(! filter_var($valor, FILTER_VALIDATE_EMAIL)){
                    $this->listaValidacoes[$campo][] = "O campo $campo deve ser um E-mail";
                }
            }

            private function strong($campo, $valor){
                if(! strpbrk($valor, "!@#$%¨&*()_+{`}^Ç:><")){
                    $this->listaValidacoes[$campo][] = "O campo $campo deve conter pelo menos um caractere especial";
                }
            }

            private function min($campo, $valor, $limitador){
                if(strlen($valor) < $limitador){
                    $this->listaValidacoes[$campo][] = "O campo $campo deve conter pelo menos $limitador caracteres";
                }
            }

            private function max($campo, $valor, $limitador){
                if(strlen($valor) > $limitador){
                    $this->listaValidacoes[$campo][] = "O campo $campo deve conter no máximo $limitador caracteres";
                }
            }

            private function unique($campo, $valor){
                $db = new Database("sqlite:database.sqlite");
                
                $result = $db->query(
                    query: "select * from usuarios where email = :email",
                    params: ['email'=>$valor]
                )->fetchAll();

                if($result){
                    $this->listaValidacoes[$campo][] = "Esse e-mail já está em uso";
                }
            }
       

            public function naoPassou($nomeCustomizado = null){
                $chave = 'validacoes';
                
                if($nomeCustomizado){
                    $chave .= '_'.$nomeCustomizado;
                }
            
                flashMessage()->push($chave, $this->listaValidacoes);
                return sizeof($this->listaValidacoes) > 0;
            }
        }
?>