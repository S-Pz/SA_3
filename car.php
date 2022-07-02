
<?php
    include './lib/list.php';
    $car = exportList();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/script.js"></script>

    <title>Car</title>
</head>
<body>
    <header>
        <figure>
            <img src="" alt="logo">
        </figure>
        <ul>
            <li><a href="./">Home</a></li>
            <li><a href="./car.php">Lista de Carros</a></li>
            <li><a href="./singup.php">Cadastrar Carro</a></li>
        </ul>
    </header>
    <main>
        <table>
            <tr>
                <th class= "cor-sim">Model</th>
                <th class= "cor-nao">Marca</th>
                <th class= "cor-sim">Ano</th>
                <th class= "cor-nao">Preço</th>
            </tr>
            <?php
                for($i = 0; $i < count($car); $i++){
                    if(($i%2) !== 0){
                        echo '<tr class = "cor-nao" >';
                    }
                    else{
                        echo '<tr>';
                    }
                    echo '<td>'.$car[$i]['model'].'</td>';
                    echo '<td>'.$car[$i]['marca'].'</td>';
                    echo '<td>'.$car[$i]['ano'].'</td>';
                    echo '<td>'.$car[$i]['preco'].'</td>';
                    echo '<td>
                              <button onclick= "deletar('.$i.')"> Deletar </button>
                              <button onclick= "editar('.$i.')"> Editar </button>
                            </td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </main>
    <footer>

    </footer>
</body>
</html>