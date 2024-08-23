<?php

namespace App\Service;

use App\Models\Usuario;

class UsuarioService
{
    // criar
    public function create(array $dados){
        $user = Usuario::create([
            'nome' => $dados['nome'],
            'email' => $dados['email'],
            'password' => $dados['password']
        ]);

        return $user;
    }
    //atualizar
    public function update(){

    }
    // deletar
    public function delete(){

    }
    // buscar por ID
    public function findById(){

    }
    // obter tudo
    public function getAll(){

    }
    // buscar por nome
    public function searchByName(){

    }




}