<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try {
            return view('auth.login');
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoginRequest  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoginRequest  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoginRequest $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}
