<?php

namespace Paciente\Model;

class Paciente {

    private $id;
    private $nome;
    private $sobrenome;

    public function exchangeArray(array $data){
        $this->id = !empty($data['id'])? $data['id'] : null;
        $this->nome = !empty($data['nome'])? $data['nome'] : null;
        $this->sobrenome = !empty($data['sobrenome'])? $data['sobrenome'] : null;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    
    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }

}