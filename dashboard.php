<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
    $adm = $_SESSION["usuario"][1];
    $nome = $_SESSION["usuario"][0];
    }else{
        echo "<script>window.location = '../login.html'</script>";
    }
?>
<!doctype html>
<html>

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400&display=swap" rel="stylesheet">
        <title>Winners Academy</title>
        <style>
            html,body{
                margin: 0;
                padding: 0;
                width: 100%; 
                height: 100%;
            }
            header{
                height: 100%;
            }
            .align-plat-info-top{
                width: 100%;
                height: 7%;
                background-color: rgb(0, 0, 0);
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            .div-1-plat-info-top{
                width: 20%;
                height: 100%;
                float: left;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            .div-2-plat-info-top{
                width: 60%;
                height: 100%;
                float: center;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            .div-2-plat-info-top h1{
                font-family: 'montserrat',sans-serif;
                font-size: 15pt;
                color: white;
            }
            .div-3-plat-info-top{
                width: 30%;
                height: 100%;
                float: right;
                display: flex;
                flex-direction: row;
                justify-content: flex-end;
                align-items: center;
            }
            .div-3-plat-info-top h1{
                font-family: 'montserrat', sans-serif;
                font-size: 12pt;
                color: rgb(255,255,255);
                float:left;
                line-height: 1%;
            }
            .align-plat-edge-menu{
                width: 20%;
                height: 93%;
                background-color: rgb(235,235,235);
                float: left;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            .align-plat-view{
                width: 80%;
                height: 93%;
                background-color: rgb(235,235,235);
                float: right;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            .plat-info-top{
                width: 98%;
                height: 100%;
                background-color: black;
                border-radius: 8px;
            }
            .plat-edge-menu{
                width: 90%;
                height: 97%;
                background-color: rgb(255,255,255);
                border-radius: 8px;
                text-align: center;
            }
            .plat-edge-menu h1{
                color: rgb(100, 100, 100);
                font-size: 12pt;
                font-family: 'montserrat', sans-serif;
                padding-left: 22.5px;
                text-align:left;
            }
            .d-side-menu-1,.d-side-menu-2,.d-side-menu-3,.d-side-menu-4{
                cursor: default;
                list-style: none;
                padding: 8px 0px 0px 0px;
                margin: 0px;
            }
            .d-side-menu-1 li a,.d-side-menu-2 li a,.d-side-menu-3 li a{
                display: inline-block;
                padding: 5px 18px 18px 18px;
                margin: 4px 2px 2px 2px;
                width: 150px;
                height: 10px;
                text-decoration: none;
                color: rgb(100, 100, 100);
                font-family:'montserrat', sans-serif;
                border: 2px solid rgb(240, 240, 240);
                border-radius: 50px;
                text-align:left;
            }
            .d-side-menu-1 li a:hover,.d-side-menu-2 li a:hover,.d-side-menu-3 li a:hover{
                display: inline-block;
                padding: 7px 20px 20px 20px;
                margin: 4px 2px 2px 2px;
                width: 150px;
                height: 10px;
                text-decoration: none;
                color: rgb(255, 255, 255);
                font-family:'montserrat', sans-serif;
                border-radius: 50px;
                background-image: linear-gradient(45deg, rgb(0, 0, 150), rgb(150, 0, 0));
                border:none;
            }
            .d-side-menu-4 li a{
                display: inline-block;
                padding: 5px 20px 20px 20px;
                margin: 8px 0px 2px 0px;
                width: 150px;
                height: 7px;
                text-decoration: none;
                color: rgb(200, 0, 0);
                font-family:'montserrat', sans-serif;
                border: 2px solid rgb(200, 0, 0);
                border-radius: 50px;
                text-align:left;
            }
            .d-side-menu-4 li a:hover{
                display: inline-block;
                padding: 5px 20px 20px 20px;
                margin: 8px 0px 2px 0px;
                width: 150px;
                height: 7px;
                text-decoration: none;
                color: rgb(255, 255, 255);
                font-family:'montserrat', sans-serif;
                border: 2px solid rgb(0, 0, 0);
                border-radius: 50px;
                background-color: rgb(0, 0, 0);
            }
            .d-side-menu-4 li a.bt1:hover{
                border: 2px solid rgb(0, 0, 0);
                background-color: rgb(0, 0, 0);
                color: rgb(200, 0, 0);
            }
            .plat-view{
                width: 97%;
                height: 97%;
                background-color: rgb(255,255,255);
                border-radius: 8px;
            }
            .where-ia{
                width: 100%;
                height: 10%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .where-ia h1{
                width: 95%;
                height: 100%;
                font-family: 'montserrat', sans-serif;
                font-size: 20pt;
                padding:0;
                margin:0;
                color: rgb(200, 200, 200);
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
                border-bottom: 1px solid;
                border-image-source: linear-gradient(45deg, rgb(0, 0, 200), rgb(255, 0, 0));
                border-image-slice: 1;
            }
        </style>
    </head>
    <body>
        <div class="align-plat-info-top">
            <div class="plat-info-top">
                <div class="div-1-plat-info-top">
                    <img src="img/winnersacademy_light_logo.svg" height="35px" height="90px">
                </div>
                <!-- <div class="div-2-plat-info-top">
                    <h1>Página Inicial</h1>
                </div> -->
                <div class="div-3-plat-info-top">
                    <img src="img/user_profile.svg" width="30px" height="30px" >
                    <h1><br>&nbsp;Olá, <?php echo $nome; ?></h1>
                </div>
            </div>
        </div>
        <div class="align-plat-edge-menu">
            
            <div class="plat-edge-menu">
                <div class="align-d-side-menu-1">
                    <ul class="d-side-menu-1">
                        <li><a href="dashboard.php">Página Inícial</a></li>
                    </ul>
                </div>
                <div class="align-d-side-menu-2">
                <h1 class="text-ref">Estudar</h1>
                    <ul class="d-side-menu-2">
                        <li><a href="recomendado.php">Recomendado</a></li>
                        <li><a href="onclass.php">Live Class</a></li>
                        <li><a href="biblioteca.php">Biblioteca</a></li>
                    </ul>
                </div>
                <div class="align-d-side-menu-3">
                <h1 class="text-ref">Treinar</h1>
                    <ul class="d-side-menu-3">
                        <li><a href="avaliacoes.php">Avaliações</a></li>
                        <li><a href="resultados.php">Resultados</a></li>
                    </ul>
                </div>
                <div class="align-d-side-menu-4">
                <h1 class="text-ref">Sistema</h1>
                    <ul class="d-side-menu-4">
                        <li><a href="ajuda.php">Ajuda</a></li>
                        <li><a href="suaconta.php">Sua Conta</a></li>
                        <li><a href="acoes/logout.php" class="bt1">Desconectar</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="align-plat-view">
            <div class="plat-view">
                <div class="where-ia">
                    <h1>Página Inicial</h1>
                </div>
            </div>
        </div>
    </body>
</html>