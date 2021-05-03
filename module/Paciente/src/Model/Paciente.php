<?php

namespace Paciente\Model;

class Paciente {

    private $id;
    private $nome;
    private $sobrenome;
    private $nome_contato;
    private $telefone;
    private $paciente_id;

    public function exchangeArray(array $data){
        $this->id = !empty($data['id'])? $data['id'] : null;
        $this->nome = !empty($data['nome'])? $data['nome'] : null;
        $this->sobrenome = !empty($data['sobrenome'])? $data['sobrenome'] : null;
        $this->nome_contato = !empty($data['nome_contato'])? $data['nome_contato'] : null;
        $this->telefone = !empty($data['telefone'])? $data['telefone'] : null;
        $this->paciente_id = !empty($data['paciente_id'])? $data['paciente_id'] : null;
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

    public function getNomeContato(){
        return $this->nome_contato;
    }

    public function setNomeContato($nome_contato){
        $this->nome_contato = $nome_contato;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getPacienteId(){
        return $this->paciente_id;
    }

    public function setPacienteId($paciente_id){
        $this->paciente_id = $paciente_id;
    }

}