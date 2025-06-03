<?php

class UserRepository 
{
    public function getRepository():array
    {
        $repos = [];

        $itens = [["id" => 1, "nome" => "Caixa","qtd"=>12,"valor"=>10],["id" => 2, "nome" => "Prateleira","qtd"=>3,"valor"=>35],["id"=>3,"nome"=>"Elevador","qtd"=>5,"valor"=>200]];//ajustado

        foreach($itens as $key => $value){
            $repos[$key] = $value;
        }

        return $repos;
    }
}
