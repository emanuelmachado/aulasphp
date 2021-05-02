<?php
header("Access-Control-Allow-Origin: *");

$nome = $_POST["nome"];
$senha = $_POST['PWSENHA'];
$confirmar_senha = $_POST['PWCONFIRMAR_SENHA'];


if(validatePasswords($senha, $confirmar_senha)){
    echo json_encode(["mensagem" => "Email enviado com sucesso"]);
}else{
    echo json_encode(["mensagem" => "Senhas inválidas, não foi possível enviar o email"]);
}


//echo json_encode((new Pessoa($nome, $senha, $confirmar_senha)));



function validatePasswords($strSenha, $strConfirmarSenha){
    $valido = false;

    // if($strSenha != $strConfirmarSenha){
    //     //!!=  => == // se não é diferente então é igual
    // }else{ //$strSenha == $strConfirmarSenha
    //     if(count($strSenha) < 6 || count($strSenha) > 10){

    //     }else{ //count($strSenha) > 5 && count($strSenha) < 11
    //         $valido = true;
    //     }
    // }

    // if($strSenha == $strConfirmarSenha){
    //     if(count($strSenha) > 5 && count($strSenha) < 11){
    //         $valido = true;
    //     }
    // }
    if(($strSenha == $strConfirmarSenha) && (strlen($strSenha) > 5 && strlen($strSenha) < 11)){
        $valido = true;
    }
    return $valido;
}


class Pessoa{

    public function __construct($nome, $senha, $confirmar_senha){
        $this->nome = $nome;
        $this->senha = $senha;
        $this->confirmar_senha = $confirmar_senha;

        //$this->confirmar_senha = "123456";
        //$this->123456 = "123456";
    }

    public $nome;
    public $senha;
    public $confirmar_senha;
}


