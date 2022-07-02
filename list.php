<?php
    $list = [];
    $car = array("model" => "Fox", "marca" => "Volkswagem", "ano" => 2021, "preco" => 64830);
    array_push($list, $car);
    $car = array("model" => "Gol", "marca" => "Volkswagem", "ano" => 2019, "preco" => 40000);
    array_push($list, $car);


    function exportList(){
        return $GLOBALS['list'];
    }
?>