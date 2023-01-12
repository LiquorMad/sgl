<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function index()
    {
        //
        try {
            return view('auth.login');
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }

  
    public function create()
    {
        //
    }

    public function store(StoreLoginRequest $request)
    {
        //
        try {
            $email = data_get($request,'email');
            $password = data_get($request,'password');

            $idTipoUtilizador = User::getIdTipoUserByEmail($email);
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                // Authentication passed...
                session()->put('email',$email);
                session()->put('idTipoUtilizador',$idTipoUtilizador);
                return redirect()->action([LinkController::class, 'index']);
            }
            else{
                session()->flash('error',['Cridenciais inválidos']);
                return redirect()->back();
            }

        } catch (\Throwable $th) {
            session()->flash('error',['Erro de login'.$th->getMessage()]);
                return redirect()->back();
        }
    }

       public function show(Login $login)
    {
        //
    }
    public function edit(Login $login)
    {
        //
    }
    
    public function update(UpdateLoginRequest $request, Login $login)
    {
        //
    }

    public function destroy(Login $login)
    {
        //
    }
}
