<?php 

session_start();

$categoria = [];
$categoria[] = 'infantil';
$categoria[] = 'juvenil';
$categoria[] = 'adulto';
$categoria[] = 'master';



$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];


if(empty($nome) OR empty($idade) OR empty($sexo)){

    $_SESSION['vazio'] = "Todos os campos precisam ser preenchidos";
    header('location: index.php');
    return;

}

if(strlen($nome) < 3 OR strlen($nome) > 50){

   $_SESSION['vazio'] = "O campo nome não preenche os requisitos - minimo de 3 caracteres e maximo de 40 caracteres";
   header('location: index.php');
    return;

}

if(is_numeric($nome) OR is_numeric($sexo)){

    $_SESSION['vazio'] = "Permitido somente letras no campo nome ou campo sexo";
    header('location: index.php');
    return;

}

if(!is_numeric($idade)){

    $_SESSION['vazio'] = "Permitido somente numero no campo idade";
    header('location: index.php');
    return 0;

}











if($idade >= 1 && $idade <= 12){
    for($i=0; $i <= count($categoria) - 1; $i++){
            if ($categoria[$i] == 'infantil'){
                if($sexo == "masculino"){
                   $_SESSION['sucesso'] = "Competidor ".$nome. " com idade ".$idade." esta enquadrado na categoria ".$categoria[$i]." modalidade masculina";
                   header('location: index.php');
                    
                    return;
                }if($sexo == "feminino") {
                    $_SESSION['sucesso'] = "Competidor ".$nome. " com idade ".$idade." esta enquadrado na categoria ". $categoria[$i] ."modalidade feminina";
                    header('location: index.php');
                    
            return;
                }else{
                    $_SESSION['sucesso'] = "Você não digitou um sexo valido";
                    header('location: index.php');
                    
                    return;
                    
                }
                
            }



    }

    }elseif($idade >= 13 && $idade <= 18){
        for($i=0; $i <= count($categoria) - 1; $i++){
            if ($categoria[$i] == 'juvenil'){
                if($sexo == "masculino"){
                   $_SESSION['sucesso'] = "Competidor ".$nome. " com idade ".$idade." esta enquadrado na categoria ".$categoria[$i]." modalidade masculina";
                   header('location: index.php');
                    
                    return;
                }if($sexo == "feminino") {
                    $_SESSION['sucesso'] = "Competidor ".$nome. " com idade ".$idade." esta enquadrado na categoria ". $categoria[$i] ."modalidade feminina";
                    header('location: index.php');
                    
            return;
                }else{
                    $_SESSION['sucesso'] = "Você não digitou um sexo valido";
                    header('location: index.php');
                    
                    return;
                    
                }
                
            }





    }
        }elseif($idade >= 19 && $idade <= 64){
            for($i=0; $i <= count($categoria) - 1; $i++){
                if ($categoria[$i] == 'adulto'){
                    if($sexo == "masculino"){
                       $_SESSION['sucesso'] = "Competidor ".$nome. " com idade ".$idade." esta enquadrado na categoria ".$categoria[$i]." modalidade masculina";
                       header('location: index.php');
                        
                        return;
                    }if($sexo == "feminino") {
                        $_SESSION['sucesso'] = "Competidor ".$nome. " com idade ".$idade." esta enquadrado na categoria ". $categoria[$i] ."modalidade feminina";
                        header('location: index.php');
                        
                return;
                    }else{
                        $_SESSION['sucesso'] = "Você não digitou um sexo valido";
                        header('location: index.php');
                        
                        return;
                        
                    }
                    
                }
            }
    
        }else{

            for($i=0; $i <= count($categoria) - 1; $i++){
                if ($categoria[$i] == 'master'){
                    if($sexo == "masculino"){
                       $_SESSION['sucesso'] = "Competidor ".$nome. " com idade ".$idade." esta enquadrado na categoria ".$categoria[$i]." modalidade masculina";
                       header('location: index.php');
                        
                        return;
                    }if($sexo == "feminino") {
                        $_SESSION['sucesso'] = "Competidor ".$nome. " com idade ".$idade." esta enquadrado na categoria ". $categoria[$i] ."modalidade feminina";
                        header('location: index.php');
                        
                return;
                    }else{
                        $_SESSION['sucesso'] = "Você não digitou um sexo valido";
                        header('location: index.php');
                        
                        return;
                        
                    }
                    
                }
    
    
    }}

















?>