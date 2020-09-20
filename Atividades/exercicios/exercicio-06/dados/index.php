<?php

    require_once "connection.php";
    //Controller -> acessar o modelo, recursos de pesquisar 
    $estados = $connection->query("SELECT * FROM estados");

    //exibir resultado da consulta
   // var_dump($estados->fetchAll()); //retornar todos os elementos

   //View - arquivo separado
   //tenta e nao da erro se nao conseguir
   //include 

   //se o arq nao for encontrado reporta erro
   require "estadosView.php";


