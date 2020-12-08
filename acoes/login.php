<?php
    require("conexao.php");

    if(isset($_POST["email"]) && isset($_POST["senha"]) && $conexao != null){
        $query = $conexao->prepare("SELECT * FROM aluno WHERE email = ? AND senha = ?");
        $query->execute(array($_POST["email"], $_POST["senha"]));

        if($query->rowCount()){
            $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];

            session_start();
            $_SESSION["usuario"] = array($user["nome"], $user["adm"]);

            echo "<script>window.location = '../dashboard.php'</script>";
        }else{
            echo json_encode(array("erro" => 1, "mensagem" => "Email e/ou senha incorretos."));
        }
    }else{
        echo json_encode(array("erro" => 1, "mensagem" => "Erro interno no servidor."));
    }
    
?>
