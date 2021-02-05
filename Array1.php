<?php

require_once "Person.php";


$people =  buildPeople();
$arrayNames = array();
foreach($people as $person){
    array_push($arrayNames, $person->name);
}
print_r(implode(",",$arrayNames));



function buildPeople(){
    $listNames = array("João", "Maria","Joseff", "Guilherme", "Gabriel", "Lucas", "Bernardo", "José", "Ricardo", "Michael", "Adriana");
    $peopleList = array();
    foreach($listNames as $item){
        $objPerson = new Person();
        $objPerson->name = $item;

        array_push($peopleList, $objPerson);
        
        unset($objPerson);
    }
    return $peopleList;
}