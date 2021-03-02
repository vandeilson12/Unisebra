<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

use App\User;

use App\Model\IniCards;
use App\Model\IniCarrosel;
use App\Model\IniInstrutores;
use App\Model\IniInstrutoresArea;
use App\Model\IniMotivacao;
use App\Model\IniMotivacaomotivo;
use App\Model\IniPerguntas;

use App\Model\CursosModel;

class TelaInicialController extends Controller
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
    public function index()
    {

        $user = $this->objUser->all();
        $cards = $this->IniCards->all();
        $carrosel = DB::table('inicialcarrosel')->orderBy('id', 'desc')->offset(0)->limit(1)->get();
        $carrosel2 = DB::table('inicialcarrosel')->orderBy('id', 'desc')->offset(1)->limit(100)->get();
        // $carrosel = $this->IniCarrosel->all();
        // $carrosel2 = $this->IniCarrosel->first();
        $instrutores = $this->IniInstrutores->all();
        $instrutoresarea = $this->IniInstrutoresArea->all();
        $motivacao = $this->IniMotivacao->all();
        $motivacaomotivo = $this->IniMotivacaomotivo->all();
        $perguntas = $this->IniPerguntas->all();

        return view('inicial/ver', compact('user','cards','carrosel2','carrosel','instrutores','instrutoresarea','motivacao','motivacaomotivo','perguntas'));

    }

    public function edite()
    {

        $user = $this->objUser->all();
        $carrosel = $this->IniCarrosel->all();
        
        return view('inicial/edite', compact('user','carrosel'));

    }


    public function editeum()
    {

        $user = $this->objUser->all();
        $cards = $this->IniCards->all();

        return view('inicial/edite1', compact('user','cards'));

    }

    public function editetres()
    {

        $user = $this->objUser->all();
        $instrutores = $this->IniInstrutores->all();
        $instrutoresarea = $this->IniInstrutoresArea->all();

        return view('inicial/edite3', compact('user','instrutores','instrutoresarea'));

    }

    public function editedois()
    {

        $user = $this->objUser->all();
        $motivacao = $this->IniMotivacao->all();
        $motivacaomotivo = $this->IniMotivacaomotivo->all();

        return view('inicial/edite2', compact('user','motivacao','motivacaomotivo'));

    }
    public function editequatro()
    {

        $user = $this->objUser->all();
        $perguntas = $this->IniPerguntas->all();

        return view('inicial/edite4', compact('user','perguntas'));
    }

    public function editecarrosel($id)
    {

        $user = $this->objUser->all();
        $carrosel = $this->IniCarrosel->find($id);

        return view('inicial/editecarrosel', compact('user','carrosel'));
    }

    public function editecard($id)
    {

        $user = $this->objUser->all();
        $card = $this->IniCards->find($id);

        return view('inicial/editecard', compact('user','card'));
    }

    public function editemotivacao($id)
    {

        $user = $this->objUser->all();
        $motivacao = $this->IniMotivacao->find($id);

        return view('inicial/editemotivacao', compact('user','motivacao'));
    }

    

    public function editemotivacaoarea($id)
    {

        $user = $this->objUser->all();
        $motivacaoarea = $this->IniMotivacaomotivo->find($id);

        return view('inicial/editemotivo', compact('user','motivacaoarea'));
    }


    public function editeinstrutores($id)
    {

        $user = $this->objUser->all();
        $instrutores = $this->IniInstrutores->find($id);

        return view('inicial/editeinstrutores', compact('user','instrutores'));
    }

    public function editeinstrutoresarea($id)
    {

        $user = $this->objUser->all();
        $instrutoresarea = $this->IniInstrutoresArea->find($id);

        return view('inicial/editeinstrutoresarea', compact('user','instrutoresarea'));
    }

    public function editeperguntas($id)
    {

        $user = $this->objUser->all();
        $perguntas = $this->IniPerguntas->find($id);

        return view('inicial/editeperguntas', compact('user','perguntas'));
    }

    public function show()
    {

        // return view('inicial/ver');

    } 

    public function store()
    {

        // return view('inicial/ver');

    }

    public function updatecarrosel($id, Request $request)
    {
        // return view('inicial/ver');

        $this->IniCarrosel->where(['id'=>$id])->update([
            'titulo'=>$request->titulo,
            'content'=>$request->content,            
        ]);

        return redirect('/inicial');

    }

    public function updatecard($id, Request $request)
    {
        // return view('inicial/ver');

        // return view('inicial/ver');

        $this->IniCards->where(['id'=>$id])->update([
            'titulo'=>$request->titulo,
            'content'=>$request->content,            
        ]);

        return redirect('/inicial');

    }

    public function updatemotivacao($id, Request $request)
    {
        // return view('inicial/ver');

        // return view('inicial/ver');

        $this->IniMotivacao->where(['id'=>$id])->update([
            'titulo'=>$request->titulo,
            'content'=>$request->content,
        ]);

        if($request->hasFile('img') && $request->img->isValid()){
            $this->IniMotivacao->where(['id'=>$id])->update([
                'img'=>$request->img->store('img','public')
            ]);
        }
        if($request->hasFile('video') && $request->video->isValid()){
            $this->IniMotivacao->where(['id'=>$id])->update([
                'video'=>$request->video->store('video','public')           
            ]);
        }

        return redirect('/inicial');

    }

    public function updatemotivacaoarea($id, Request $request)
    {
        // return view('inicial/ver');

        // return view('inicial/ver');

        $this->IniMotivacaomotivo->where(['id'=>$id])->update([
            'titulo'=>$request->titulo,
            'motivo'=>$request->motivo,            
        ]);

        return redirect('/inicial');

    }


    public function updateinstrutores($id, Request $request)
    {
        // return view('inicial/ver');

        // return view('inicial/ver');

        $this->IniInstrutores->where(['id'=>$id])->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'funcao'=>$request->funcao,
            'redefacebook'=>$request->redefacebook,
            'redetwitter'=>$request->redetwitter,
            'redeinstagram'=>$request->redeinstagram,
            'redelinkedin'=>$request->redelinkedin,   
        ]);

        if($request->hasFile('img') && $request->img->isValid()){
            $this->IniInstrutores->where(['id'=>$id])->update([
                'img'=>$request->img->store('img','public'),
            ]); 
        }

        return redirect('/inicial');

    }

    public function updateinstrutoresarea($id, Request $request)
    {
        // return view('inicial/ver');

        // return view('inicial/ver');

        $this->IniInstrutoresArea->where(['id'=>$id])->update([
            'titulo'=>$request->titulo,
            'content'=>$request->content,            
        ]);

        return redirect('/inicial');

    }

    

    public function createcarro(Request $request)
    {
        $inicarrosel = DB::table('inicialcarrosel')->orderBy('id', 'desc')->take(1)->insert([
            'titulo'=>$request->titulo,
            'content'=>$request->content,
        ]);

        if($inicarrosel){
            return redirect('inicial-editar-carrosel');
        }

    }
    public function createcard(Request $request)
    {
        $inicards = DB::table('inicards')->orderBy('id', 'desc')->take(1)->insert([
            'titulo'=>$request->titulo,
            'content'=>$request->content,
        ]);

        if($inicards){
            return redirect('inicial-editar-cards');
        }

    }

    public function createmotivacao(Request $request)
    {
        if($request->hasFile('img') && $request->img->isValid()){
            $inicards = DB::table('inimotivacao')->orderBy('id', 'desc')->take(1)->insert([
                'titulo'=>$request->titulo,
                'content'=>$request->content,
                'img'=>$request->img->store('img','public'),
                'video'=>$request->video->store('video','public')
            ]);
       
            return redirect('inicial-editar-motivacao');
        }
       

    }

    public function createmotivacaomotivo(Request $request)
    {
        $inimotivacaomotivo = DB::table('inimotivacaomotivo')->orderBy('id', 'desc')->take(1)->insert([
            'titulo'=>$request->titulo,
            'motivo'=>$request->motivo,
        ]);

        if($inimotivacaomotivo){
            return redirect('inicial-editar-motivacao');
        }

    }


    public function createinst(Request $request)
    {
        $inicards = DB::table('iniinstrutores')->orderBy('id', 'desc')->take(1)->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'funcao'=>$request->funcao,
            'img'=>$request->img->store('img','public'),
            'redefacebook'=>$request->redefacebook,
            'redetwitter'=>$request->redetwitter,
            'redeinstagram'=>$request->redeinstagram,
            'redelinkedin'=>$request->redelinkedin,
        ]);

        if($inicards){
            return redirect('inicial-editar-instrutores');
        }

    }

    public function createinstarea(Request $request)
    {
        $inicards = DB::table('iniinstrutoresarea')->orderBy('id', 'desc')->take(1)->insert([
            'titulo'=>$request->titulo,
            'content'=>$request->content,
        ]);

        if($inicards){
            return redirect('inicial-editar-instrutores');
        }

    }
    

    public function createper(Request $request)
    {
        $iniperguntas = DB::table('iniperguntas')->orderBy('id', 'desc')->take(1)->insert([
            'titulo'=>$request->titulo,
            'pergunta'=>$request->pergunta,
        ]);

        if($iniperguntas){
            return redirect('inicial-editar-perguntas');
        }

    }

    public function destroycarr($id)
    {
        $del = $this->IniCarrosel->destroy($id);

        // $aaa = $this->IniCarrosel->find($id);

        // Storage::delete($aaa['img']);

        return redirect('inicial-editar-carrosel');
    }

    public function destroycard($id)
    {
        $del = $this->IniCards->destroy($id);

        $aaa = $this->IniCards->find($id);

        Storage::delete($aaa['img']);

        return redirect('inicial-editar-cards');
    }

    public function destroymotivacao($id)
    {
        $del = $this->IniMotivacao->destroy($id);

        $aaa = $this->IniMotivacao->find($id);

        Storage::delete($aaa['img']);
        Storage::delete($aaa['video']);

        return redirect('inicial-editar-motivacao');
    }

    public function destroymotivo($id)
    {
        $del = $this->IniMotivacaomotivo->destroy($id);

        $aaa = $this->IniMotivacaomotivo->find($id);

        Storage::delete($aaa['img']);

        return redirect('inicial-editar-motivacao');
    }


    public function destroyinst($id)
    {
        $del = $this->IniInstrutores->destroy($id);

        $aaa = $this->IniInstrutores->find($id);

        Storage::delete($aaa['img']);

        return redirect('inicial-editar-instrutores');
    }

    public function destroyinstarea($id)
    {
        $del = $this->IniInstrutoresArea->destroy($id);

        $aaa = $this->IniInstrutoresArea->find($id);

        Storage::delete($aaa['img']);

        return redirect('inicial-editar-instrutores');
    }

    public function destroyperg($id)
    {
        $del = $this->IniPerguntas->destroy($id);

        $aaa = $this->IniPerguntas->find($id);

        return redirect('inicial-editar-perguntas');
    }
    
    
        
}
