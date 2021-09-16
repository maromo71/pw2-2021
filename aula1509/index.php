<?php
require_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados dos usuários</title>
</head>
<body>
    <?php
        $conn->exec("set names utf8");
        //Preparando uma consulta
        $sql = "Select * from tb_alunos;";
        //Realizando a consulta no banco e trazendo para vetor
        $resultado = $conn->query($sql);
        //Linhas
        $rows = $resultado->fetchAll(PDO::FETCH_ASSOC);
        //print_r($rows);
        foreach ($rows as $valor){
            foreach ($valor as $key => $value) {
                echo $key . ": " . $value . "<br>";
            }
            echo "<br>";
        }
            
                
    ?>
</body>
</html>