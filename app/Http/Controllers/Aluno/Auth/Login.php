<?php

namespace App\Http\Controllers\Aluno\Auth;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Model\Model\AlunoModel;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

use Fideloper\Proxy\TrustProxies as Middleware;
use App\Extensions\MongoSessionHandler;

class Login extends Controller
{
    //

    // use AuthenticatesUsers;

    // protected $redirectTo = '/aluno';

    public function __contruct()
    {
        // $this->middleware('guest')->except('logout');
        $this->objAluno = new AlunoModel;
    }

    public function index()
    {
        // $aluno = $this->objAluno->all();

        return view('aluno/auth/login');
    }


    public function register(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');


            $vas = DB::insert('insert into aluno(id,name,email,password,img,cod) values(?,?,?,?,?,?)', [null,$name,$email,$password,null,null]);

            if($vas)
                
                return view('/aluno/home');

    }


    public function login(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');


        $vas = DB::select('select id from aluno where email=? and password =?' ,[$email,$password]);

        if($vas)
        {
             $request->session()->put('aluno', $request->input('_token'));

            if($request->session()->has('aluno'))
                return view('/aluno/home');

        }else{

            return view('/aluno/auth/login');

        }
    }

}
