<?php


$lista = array();


array_push($lista,"Fabiano");
array_push($lista,"Fabiano Rauzer");
array_push($lista,"Fabiano Rauzer Silva");
array_push($lista,"Fabiano Rauzer Silva Pereira");


foreach($lista as $key => $nomePessoa){
    echo "{$key} - {$nomePessoa} \n";
}