<?php

namespace App\Http\Controllers\Aluno;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlunoController extends Controller
{
    //
    public function __contruct(){

        $this->objAluno = new AlunoModel();

    }

    public function secretaria(Request $request){

        // if($request->session()->get('aluno')){
            if($request->session()->has('aluno')){
                return view('/aluno/secretaria');
            }else{
                return view('/aluno/auth/login');

            }
        // }
    }

    public function financeiro(Request $request){

        if($request->session()->has('aluno')){
            return view('/aluno/financeiro');
        }else{
            return view('/aluno/auth/login');

        }

    }
    public function cursos(Request $request){

        if($request->session()->has('aluno')){
            return view('/aluno/cursos');
        }else{
            return view('/aluno/auth/login');

        }

    }
    public function index(Request $request){

        if($request->session()->has('aluno')){
            return view('/aluno/home');
        }else{
            return view('/aluno/auth/login');

        }

    }

    public function finalizar(Request $request){

        if($request->session()->has('aluno'))
            $request->session()->forget('aluno');
                return view('/aluno/auth/login');
        

    }
    public function store(){

    }

    public function edite(){

    }

    public function create(){

    }
    
    public function delete(){
        
    }
}

