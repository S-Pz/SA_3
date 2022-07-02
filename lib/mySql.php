<?php
    function conecta () {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'concessionaria';

        $mysqli = mysqli_connect($host, $user, $password, $database);
        if (mysqli_connect_errno()){
            return NULL;
        }else {
            return $mysqli;    
        }
    }
    function listarCarros(){
        $list = [];
        $query = 'SELECT id, modelo, marca, ano, preco, FROM carros';
        $link = conecta();

        if($link !== NULL){
            $result = mysqli_query($link, $query);

            if($result){
                while ($row = mysqli_fetch_row($result)){
                    
                    $carro = array('id' => (INT) $row[0],
                    'modelo' => $row[1], 'marca' => $row[2],
                    'ano' => (INT) $row[3], 'preco' => (FLOAT) $row[4]
                );
                array_push($lista, $carro);
                }
            }
        }
        return  $lista;
    }

    function cadastrarCarro($modelo, $marca, $ano, $preco){
        $query = "INSERT INTO carros (modelo, marca, ano, preco)
        values('" . $modelo . "', '" . $marca . "', '" . $ano . "', " . $preco . ")";

        $link = conecta();

        if($link !== NULL){
            $result = msqli_query($link, $query);
            return $result;

        }else {
            return NULL;
        }
    }
?>