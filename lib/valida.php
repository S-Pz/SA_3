<?php
    include './mySql.php';
    //var_dump($_POST);
    if(isset($_POST) && isset($_POST['modelo']) && isset($_POST['marca'])
        && isset($_POST['ano']) && isset($_POST['preco'])){
        
            $modelo = $_POST['modelo'];
            $marca = $_POST['marca'];
            $ano = (INT)$_POST['ano'];
            $preco = (FLOAT)$_POST['preco'];
            $resposta = cadastrarCarro($modelo,$marca,$ano,$preco);

            if($resposta === NULL || $resposta == false){
                header('Location: ../singup.php?erro=1');
            }else {
                header('Location: ../car.php?erro=1');
            }
    }else {
        header('Location: ../singup.php?erro=1');
    }
?>