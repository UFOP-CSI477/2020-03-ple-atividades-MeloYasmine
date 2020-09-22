<?php

namespace App\Models;

class Produto implements ModelInterface{

    private $id, $nome, $un;
    public function __construct($id, $nome, $un){

        $this->id = $id;
        $this->nome = $nome;
        $this->un = $un;



    }

    public function __destruct(){



    }

    public function create(Produto $p){

    }

    public function read(){

    }

    public function update(Produto $p){

    }

    public function delete($id){

    }

    public function setId($id){
        $this->id = $id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setUnidade($un){
        $this->un = $un;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getUnidade(){
        return $this->un;

    }

    public function getAll(){

    }

    public function get($id){

        
    }



}