<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

use Illuminate\Support\Arr;


// use App\Http\Requests\Requests;

use App\Model\IniCards;
use App\Model\IniCarrosel;
use App\Model\IniInstrutores;
use App\Model\IniInstrutoresArea;
use App\Model\IniMotivacao;
use App\Model\IniMotivacaomotivo;
use App\Model\IniPerguntas;

use App\Model\CursosModel;
use App\Model\CursosModulos;
use App\Model\CursosPreco;
use App\Model\CursosDescricao;
use App\User;

class InicialController extends Controller
{
    //

    public $objUser;
    
    public $IniCards;
    public $IniCarrosel;
    public $IniInstrutores;
    public $IniInstrutoresArea;
    public $IniMotivacao;
    public $IniMotivacaomotivo;
    public $IniPerguntas;

    public $objCursos;

    public function __construct()
    {
        // $this->middleware('auth');

        $this->objUser = new User;

        $this->IniCards = new  IniCards;
        $this->IniCarrosel = new  IniCarrosel;
        $this->IniInstrutores = new  IniInstrutores;
        $this->IniInstrutoresArea = new  IniInstrutoresArea;
        $this->IniMotivacao = new  IniMotivacao;
        $this->IniMotivacaomotivo = new  IniMotivacaomotivo;
        $this->IniPerguntas = new  IniPerguntas;

        $this->objCursos = new CursosModel;
    }

    public function index(){


        $user = $this->objUser->all();
        $cards = $this->IniCards->all();
        $carrosel = DB::table('inicialcarrosel')->orderBy('id', 'desc')->skip(0)->take(1)->get();
        $carrosel2 = DB::table('inicialcarrosel')->orderBy('id', 'desc')->skip(1)->take(101)->get();
        // $carrosel = $this->IniCarrosel->all();
        // $carrosel2 = $this->IniCarrosel->first();
        $instrutores = $this->IniInstrutores->all();
        $instrutoresarea = $this->IniInstrutoresArea->all();
        $motivacao = $this->IniMotivacao->all();
        $motivacaomotivo = $this->IniMotivacaomotivo->all();
        $perguntas = $this->IniPerguntas->all();

        return view('welcome', 
        compact('user','cards','carrosel2','carrosel','instrutores','instrutoresarea',
        'motivacao','motivacaomotivo','perguntas'
        ));


    }

    public function cursos(){
        
        $curso = $this->objCursos->all();


        
        //  $cmodulos = $curso->find($curso->id)->cursosmodulos;
        //colecao de matrizes cursos
        //  $bb = collect($cmodulos)->avg('modulo');

        

        return view('principal/cursos', compact('curso'));
    }

    public function curso($id){
        $cursos = $this->objCursos->find($id);
       
        
        
        return view('principal/curso', compact('cursos'));
    }
}
