<?php

class usuario{

    public $nome = "carlos";
    public $email = "carlos@gmail.com";
    public $role = "user"// User, Admin, Moderador...

    public function mostrarnome(){
        escho $this -> nome;
    }
    public function mostraEmail(){
        echo $this -> email;
    }
    public function ehAdmin(){
        if($this->role == "admin"){
            echo"Você é Administrador do sistema";
        }else{
            echo"Você não é Administrador do sistema";
        }
    }

}
$carlos = new usuario ();
echo serialize($carlos);