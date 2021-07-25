<?php
    include('conexao.php');
    include('usuario.php');
    
    if(empty($_POST['nome']) || empty($_POST['nomeusuario']) || empty($_POST['email']) || empty($_POST['senha'])){
        header('Location: cadastro.html');
        exit();
    }

    $s = md5($_POST["senha"]);
	$usuario = new Usuario($_POST['nome'], $_POST["nomeusuario"], $_POST["email"], $s);
    
    $nome = $usuario->getNome();
    $nomeusuario = $usuario->getUsuario();
    $email = $usuario->getEmail();
    $senha = $usuario->getSenha();
    $i = 0;

    $stmt = $con->prepare("INSERT INTO `usuario`(`nome`, `nomeusuario`, `email`, `senha`) 
    VALUES (:nome, :nomeusuario, :email, :senha)");

    $fetch = "SELECT `nome`, `nomeusuario` FROM `usuario`";
    $resultado = $con->query($fetch);

    while($row = $resultado->fetch()) {
        if($row['nomeusuario'] == $nomeusuario || $row['email'] == $email){
            $i++;
        }
    }

    if($i>0){
        echo "Usuário ou E-mail já existentes.";
    }else{
        $stmt->execute(array(':nome' => $nome, ':nomeusuario' => $nomeusuario, ':email' => $email, ':senha'=> $senha));

        echo "Cadastro realizado com sucesso.";
        header("Location: login.html");
    }
?>