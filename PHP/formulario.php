<?php


    $name =  $_POST["nome"] . '<br>';
    $cpf = $_POST["cpf"] . '<br>';
    $sexo = $_POST["sexo"] . '<br>';
    $end  = $_POST["endereco"] . '<br>';
    $cidade =  $_POST["cidade"] . '<br>';
    $telefone =  $_POST["telefone"] . '<br>';
    $celular =  $_POST["celular"] . '<br>';
    $obs =  $_POST["obs"] . '<br>';
   
   
    echo "Nome: " .$name;
    echo "CPF: "  .$cpf ;
    echo "Sexo: " .$sexo;
    echo "Endereco: " .$end;
    echo "Cidade: " .$cidade;
    echo "Telefone: " .$telefone;
    echo "Celular: " .$celular;
    echo "Observacao: " .$obs;
    

    ?>
