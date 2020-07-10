<?php 

    session_start();


?>


<!DOCTYPE html>

        <head>
                <meta charset="utf-8">
                <title>Formulario de Inscrição</title>
                <meta name="author" content="">
                <meta name="description" content="">
                <meta name="viewport" content="width=device-witdth, initial-scale=1">
        </head>

        <body>
            <h5>FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</h5>

            <form action="script.php" method="post">

            <?php 
            
            $sucesso = isset($_SESSION['sucesso']) ? $_SESSION['sucesso'] : '';


            if(!empty($sucesso)){
                echo $sucesso;
            }
            
            $vazio = isset($_SESSION['vazio']) ? $_SESSION['vazio'] : '';

            if(!empty($vazio)){
                echo $vazio;
            }
            
            
            session_destroy();
            
            ?>
                        
                <p>NOME: <input type="text" name="nome" /> </p>     
                <p>IDADE: <input type="text" name="idade" /> </p>  
                <p>SEXO: <input type="text" name="sexo" /> </p> 
                <p><input type="submit" value="Enviar" /></p>
                
            </form>
            
        </body>





</html>