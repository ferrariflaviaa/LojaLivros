<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Compra</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1> Sua Compra foi de ... </h1> <br/>
        <?php
            $colecao1 = $_POST['colecao1'];
            $colecao2 = $_POST['colecao2'];
            $colecao3 = $_POST['colecao3'];
            $colecao4 = $_POST['colecao4'];
            $colecao5 = $_POST['colecao5'];

            $valor = 8.00;
            $compra = 0;
            $cont = 0.0;
            $final = 0.0;
            
            
            while (($colecao1 > 0) || ($colecao2 >0) || ($colecao3 > 0) || ($colecao4 > 0) || ($colecao5 > 0) ){
                
                if ($colecao1 != 0){
                    $colecao1 --;
                    $cont++;
                }
                if ($colecao2 != 0){
                    $colecao2 --;
                    $cont++;
                }
                if($colecao3 != 0){
                    $colecao3 --;
                    $cont ++;
                }
                if($colecao4 != 0){
                    $colecao4 --;
                    $cont++;
                }
                if ($colecao5 != 0){
                    $colecao5 --;
                    $cont++;
                }  
                if($cont == 1 ){
                    $resultado = $valor;
                    echo "Valor Total é R$ $valor com um livro da coleção <br/>";
                
                }else if ($cont == 2){
                    $compra = $valor * $cont; 
                    $porcentagem = 5;
                    $valorReal = $compra * ($porcentagem/100);
                    $resultado = $compra - $valorReal;
                    echo "Valor Total é R$ $resultado com 2 livros da coleção diferentes <br/>";
                }else if ($cont == 3){
                    $compra = $valor * $cont; 
                    $porcentagem = 10;
                    $valorReal = $compra * ($porcentagem/100);
                    $resultado = $compra - $valorReal;
                    echo "Valor Total é R$ $resultado com 3 livros da coleção diferentes <br/>";
       
                }else if ($cont == 4){
                    $compra = $valor * $cont; 
                    $porcentagem = 20;
                    $valorReal = $compra * ($porcentagem/100);
                    $resultado = $compra - $valorReal;
                    echo "Valor Total é R$ $resultado com 4 livros da coleção diferentes <br/>";
                }else if ($cont == 5 ){
                    $compra = $valor * $cont; 
                    $porcentagem = 25;
                    $valorReal = $compra * ($porcentagem/100);
                    $resultado = $compra - $valorReal;
                    echo "Valor Total é R$ $resultado com 5 livros da coleção diferentes <br/>";
                }
                $cont = 0;
                
                $final = $resultado + $final;
            }
            echo "---------------------------------------<br/>";
            echo "Total da compra foi de R$ $final   <br/> ";
            echo "---------------------------------------"
            
          
            
        ?>
    </body>
</html>
