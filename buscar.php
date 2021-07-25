<?php
    include('conexao.php');

    if(empty($_POST['buscar'])){
        header('Location: listar.php');
        exit();
    }

    $buscar = $_POST['buscar'];

    $stmt = $con->prepare("SELECT `nome` FROM `usuario` WHERE `nome` = :bu");

    $stmt->bindparam(":bu", $buscar);
    $stmt->execute();

    if($stmt->rowCount() == 0){
        echo "Usuário não encontrado ou inexistente.<br>";
    }else{
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Usuário: <br>";
        foreach ($resultado as $key => $value) {
            echo $key.": ".$value."<br>";
        }
        echo "<br>";
    }
    
    ?>
        <button><a href="listar.php">Voltar</a></button>
    <?php
?>