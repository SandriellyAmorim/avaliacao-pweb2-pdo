<?php
    include('conexao.php');

    ?>
        <form method="POST" name="formulario" action="buscar.php">
            <br>
            <label for="buscar">Buscar por usuário: </label>
            <input type="text" name="buscar">
            <br>
            <button type="submit" value="Send">Buscar</button>
            <br>
        </form>
    <?php

    $stmt = $con->prepare("SELECT `nome` FROM `usuario`");
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    for ($i=0; $i < count($resultado); $i++) { 
        echo "Usuário: ".($i+1)."<br>";
        foreach ($resultado[$i] as $key => $value) {
            echo $key.": ".$value."<br>";
        }
        echo "<br>";
    }
?>