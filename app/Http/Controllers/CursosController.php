<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
// use App\Http\Requests\Requests;
use App\Model\CursosModel;
use App\Model\CursosModulos;
use App\Model\CursosPreco;
use App\Model\CursosDescricao;
use App\User;

class CursosController extends Controller
{
    //

    public $objUser;
    public $objCursos;

    public $objCursosPreco;
    public $objCursosDescricao;
    public $objCursosModulos;

    public function __construct()
    {
        // $this->middleware('auth');

        $this->objUser = new User;
        $this->objCursos = new CursosModel;

        $this->objCursosPreco = new CursosPreco;
        $this->objCursosDescricao = new CursosDescricao;
        $this->objCursosModulos = new CursosModulos;
    }

    public function index()
    {
        $curso = $this->objCursos->all();
        $cursopreco = $this->objCursosPreco->all();
        $cursodescricao = $this->objCursosDescricao->all();
        $cursomodulos = $this->objCursosModulos->all();

        return view('cursos',compact('curso','cursopreco','cursodescricao','cursomodulos'));
    }

    public function __invoke()
    {
        //
    }

 

    public function show($id)
    {

        $c = $this->objCursos->find($id);

        $cursopreco = $this->objCursosPreco->all();
        $cursodescricao = $this->objCursosDescricao->all();
        $cursomodulos = $this->objCursosModulos->all();

        //colecao de matrizes cursos

        $cc = $c->find($c->id)->cursosdescricao;

        $mm = $c->find($c->id)->cursosmodulos;

        $hh = $c->find($c->id)->cursospreco;
        

        return view('cursos/ver',compact('cc','c','cursopreco','cursodescricao','cursomodulos','mm','hh'));
    }

    public function verpreco($id)
    {

        //buscando ID em preco dos cursos 

        $cursopreco = $this->objCursosPreco->find($id);

        //Relacionamento a cursos

       

        
        return view('cursos/verpreco',compact('cursopreco'));
    }

    public function vermodulos($id)
    {

        //buscando ID em preco dos cursos 

        $cursomodulo = $this->objCursosModulos->find($id);

        

        
        return view('cursos/vermodulo',compact('cursomodulo'));
    }

    public function verdescricao($id)
    {

        //buscando ID em preco dos cursos 

        $cursodescricao = $this->objCursosDescricao->find($id);

       
        //colecao de matrizes cursos
        // $bb = collect($cc)->avg('nome');

        

        
        return view('cursos/verdescricao',compact('cursodescricao'));
    }

    


    public function create()
    {
        $cursos= $this->objCursos->all();

        $cursopreco = $this->objCursosPreco->all();
        $cursodescricao = $this->objCursosDescricao->all();
        $cursomodulos = $this->objCursosModulos->all();

        return view('cursos/create',compact('cursos','cursopreco','cursodescricao','cursomodulos'));
    }


    public function createpreco()
    {
        $cursos= $this->objCursos->all();

        $cursopreco = $this->objCursosPreco->all();
        $cursodescricao = $this->objCursosDescricao->all();
        $cursomodulos = $this->objCursosModulos->all();

        foreach($cursopreco as $key=>$c){
            $bb=$c->find($c->id)->cursos;
            
        }
    
        return view('cursos/createpreco',compact('cursos','cursopreco','cursodescricao','cursomodulos'));
    }

    public function createmodulos()
    {
        $cursos= $this->objCursos->all();

        $cursopreco = $this->objCursosPreco->all();
        $cursodescricao = $this->objCursosDescricao->all();
        $cursomodulos = $this->objCursosModulos->all();

        return view('cursos/createmodulos',compact('cursos','cursopreco','cursodescricao','cursomodulos'));
    }

    public function createdescricao()
    {
        $cursos= $this->objCursos->all();

        $cursopreco = $this->objCursosPreco->all();
        $cursodescricao = $this->objCursosDescricao->all();
        $cursomodulos = $this->objCursosModulos->all();

        return view('cursos/createdescricao',compact('cursos','cursopreco','cursodescricao','cursomodulos'));
    }

    public function store(Request $request)
    {
        
        if($request->hasFile('img') && $request->img->isValid()){

            $compras = DB::table('cursos')->orderBy('id', 'desc')->take(1)->insert([
                'nome'=>$request->nome,
                'modalidade'=>$request->modalidade,
                'ch'=>$request->ch,
                'detalhes'=>$request->detalhes,
                'publico_alvo'=>$request->publico_alvo,
                'ch'=>$request->ch,
                'cod_curso'=>$request->cod_curso,
                'img'=>$request->img->store('img','public')
            ]);
        

            if($compras){
                return redirect('cursos');
            }
        }
    }


    public function preco(Request $request)
    {

        $compras = DB::table('preco_cursos')->orderBy('id', 'desc')->take(1)->insert([
                'id_curso'=>$request->id_curso,
                'total'=>$request->total,
                'parcelas'=>$request->parcelas,
                'vezes'=>$request->vezes,
        ]);

         $z = DB::table('cursos')
            ->where('id',$request->id_curso)
                ->update(['preco_id'=>$request->id_curso,]);
        
        

        if($compras && $z){
            return redirect('cursos');
        }
        return redirect('cursos');

    }


    public function modulos(Request $request)
    {
        
        
        $compras = DB::table('modulos')->orderBy('id', 'desc')->take(1)->insert([
                'id_curso'=>$request->id_curso,
                'modulo'=>$request->modulo,
        ]);


        $z = DB::table('cursos')
            ->where('id',$request->id_curso)
                ->update(['modulos_id'=>$request->id_curso,]);
        

        if($compras && $z){
            return redirect('cursos');
        }
        
        return redirect('cursos');

    }


    public function descricao(Request $request)
    {
        
        $compras = DB::table('descricao')->orderBy('id', 'desc')->take(1)->insert([
                'id_curso'=>$request->id_curso,
                'icon'=>$request->icon,
                'descricao'=>$request->descricao,
        ]);


        $z = DB::table('cursos')
            ->where('id',$request->id_curso)
                ->update(['descricao_id'=>$request->id_curso,]);
        

        if($compras && $z){
            return redirect('cursos');
        }
        
        return redirect('cursos');

    }

  

 
    
    public function edit($id)
    {
        $c=$this->objCursos->find($id);

        $cursopreco = $this->objCursosPreco->all();
        $cursodescricao = $this->objCursosDescricao->all();
        $cursomodulos = $this->objCursosModulos->all();

        // $adm = $this->objAdm->all();
        

        // dd($users);

        return view('cursos/edite', compact('c','cursopreco','cursodescricao','cursomodulos'));
    }

    public function editemodulo($id)
    {
        
        $cursomodulos = $this->objCursosModulos->find($id);

        // $adm = $this->objAdm->all();
        

        // dd($users);

        return view('cursos/editemodulos', compact('cursomodulos'));
    }

    public function editepreco($id)
    {
        
        $cursopreco = $this->objCursosPreco->find($id);

        // $adm = $this->objAdm->all();
        

        // dd($users);

        return view('cursos/editepreco', compact('cursopreco'));
    }


    public function editedescricao($id)
    {
        
        $cursodescricao = $this->objCursosDescricao->find($id);

        // $adm = $this->objAdm->all();
        

        // dd($users);

        return view('cursos/editedescricao', compact('cursodescricao'));
    }






    public function update(Request $request, $id)
    {
        // $this->objUser->where(['id'=>$id])->update([
        //     'name'=>$request->name,
        //     'email'=>$request->email
            // 'password'=>$request->password
        // ]);

        // if ($request->img) {
        //     $file = $request->File('img');
        //     $ext  = $user->username . "." . $file->clientExtension();
        //     $file->storeAs('images/', $ext);
        //     $user->image_name = $ext;
        // }

        // $adm = $this->objUser->find($id);
        // $aaa = $this->objAdm->find($id);

        // return dd($aaa['id']);

        // if($request->id == $id){

            if($request->hasFile('img') && $request->img->isValid()){

                $this->objCursos->where(['id'=>$id])->update([
                    'img'=>$request->img->store('img','public'),
                ]);
            } 

            $this->objCursos->where(['id'=>$id])->update([
                'nome'=>$request->nome,
                'modalidade'=>$request->modalidade,
                'publico_alvo'=>$request->publico_alvo,
                'detalhes'=>$request->detalhes,                
                // 'img'=>$request->img->store('img','public'),
                'ch'=>$request->ch,
            ]);

              

        //         $this->objAdm->where(['id_user'=>$id])->update([
        //             'img'=>$request->img->store('img','public'),
        //             'upload'=>$request->name,
        //             'id_user'=>$request->id
        //         ]);
            // }else{
            //     echo "erro 2";
            // }
        
           
        // }

        return redirect('cursos');
    }
    

    public function updatemodulo(Request $request, $id)
    {
        
        $this->objCursosModulos->where(['id'=>$id])->update([
            // 'img'=>$request->img->store('img','public'),
            'modulo'=>$request->modulo,
        ]);

              
        return redirect('cursos');
    }

    public function updatepreco(Request $request, $id)
    {
        
        $this->objCursosPreco->where(['id'=>$id])->update([
            // 'img'=>$request->img->store('img','public'),
            'total'=>$request->total,
            'vezes'=>$request->vezes,
            'parcelas'=>$request->parcelas,
        ]);

              
        return redirect('cursos');
    }


    public function updatedescricao(Request $request, $id)
    {
        
        $this->objCursosDescricao->where(['id'=>$id])->update([
            // 'img'=>$request->img->store('img','public'),
            'descricao'=>$request->descricao,
            'icon'=>$request->icon,
        ]);

              
        return redirect('cursos');
    }

   
    public function finalizar($id){

        $del = $this->objCursos->destroy($id);

        $aaa = $this->objCursos->find($id);


        // return($del) ? 'sim' : 'não';

        // if($request->hasFile('img') && $request->img->isValid()){

            Storage::delete($aaa['img']);
        // }

        // DB::table('')->where('id', $id)->delete();

        return redirect('cursos');
    }

    public function finalizarpreco($id){

        $del = $this->objCursosPreco->destroy($id);

        // $aaa = $this->objCursos->find($id);


        // return($del) ? 'sim' : 'não';

        // if($request->hasFile('img') && $request->img->isValid()){

            // Storage::delete($aaa['img']);
        // }

        // DB::table('')->where('id', $id)->delete();

        return redirect('cursos');
    }


    public function finalizarmodalidade($id){

        $del = $this->objCursosModulos->destroy($id);

        // $aaa = $this->objCursos->find($id);


        // return($del) ? 'sim' : 'não';

        // if($request->hasFile('img') && $request->img->isValid()){

            // Storage::delete($aaa['img']);
        // }

        // DB::table('')->where('id', $id)->delete();

        return redirect('cursos');
    }


    public function finalizardescricao($id){

        $del = $this->objCursosDescricao->destroy($id);

        // $aaa = $this->objCursos->find($id);


        // return($del) ? 'sim' : 'não';

        // if($request->hasFile('img') && $request->img->isValid()){

            // Storage::delete($aaa['img']);
        // }

        // DB::table('')->where('id', $id)->delete();

        return redirect('cursos');
    }

    
}
