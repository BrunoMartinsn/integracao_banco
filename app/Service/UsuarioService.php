<?php

namespace App\Service;

use App\Models\Usuario;
use GuzzleHttp\Psr7\Request;

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
    public function update(array $dados){
        $usuario = Usuario::find($dados['id']);
        if($usuario == null){
            return[
                'status' => false,
                'mensagem' => 'usuario não encontrado'
            ];


        }

        if(isset($dados['password'])){
            $usuario->password = $dados['password'];
        }

        if(isset($dados['nome'])){
            $usuario->nome = $dados['nome'];;
        }

        if(isset($dados['Email'])){
            $usuario->Email = $dados['Email'];
        }

        $usuario->save();



        $usuario->nome = $dados['nome'];
        $usuario->Email = $dados['Email'];
        $usuario->password = $dados['password'];
        $usuario->save();
        return [
            'status' => true,
            'mensagem' => 'atualizado com sucesso'
        ];

    }
    // deletar
    public function delete($id){
        $usuario = Usuario::find($id);
        if($usuario ==null){
            return [
                'status' => false,
                'mensagem' => 'usuario não encontrado'
            ];
        }

        $usuario->delete();

        return [
            'status' => true,
            'mensagem' => 'usuario excluido com secesso'
        ]; 
        

    }
    // buscar por ID
    public function findById($id){
        $usuario = Usuario::find($id);
        if($usuario == null){
            return [
                'status' => false,
                'menssagem' => 'usuario não encontrado'
            ];
        }
        return [
            'status' => true,
            'menssagem' => 'usuario encontrado',
            'data' => $usuario
        ];

    }
    // obter tudo
    public function getAll(){
        $usuarios = Usuario::all();
        return [
            'status' => true,
            'menssagem' => 'pesquisa efetuada com sucesso',
            'data' => $usuarios

        ];

    }
    // buscar por nome
    public function searchByName($nome){
        $usuario = Usuario::where('nome','like','%'.$nome.'%')->get();
        if($usuario->isEmpty()){
           return [
                'status' => false,
                'menssagem' => 'sem resultado'
            ];
        }

        return [
            'status' => true,
            'menssagem' => 'resultado encontrado',
            'data' => $usuario
        ];
        }


    


    public function searchByEmail($Email){
        $usuario = Usuario::where('Email','like','%'.$Email.'%')->get();
        if($usuario->isEmpty()){
            return [
                'status' => false,
                'menssagem' => 'sem resultado'
            ];
        }

        return [
            'status' => true,
            'menssagem' => 'resultado encontrado',
            'data' => $usuario
        ];

    }




}


