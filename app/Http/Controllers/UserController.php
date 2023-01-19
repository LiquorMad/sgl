<?php

namespace App\Http\Controllers;

use App\Models\TipoUtilizador;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function index()
    {
        try {
            //code...
            $users=User::dataToUSer();
            $tipoUtilizador=TipoUtilizador::all();
            return view('layouts.users.users',['users'=>$users,'tipoUtilizador'=>$tipoUtilizador]);
        } catch (\Throwable $th) {
            session()->flash('error',['Erro ao carregar página'.$th->getMessage()]);
            return redirect()->back();
            
        }
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        try {
            //code...
            $nome = $request->nome;
            $email = $request->email;
            $tipo = $request->tipo;
            $password = $request->password;
            $tipoUtilizador = DB::table('tipo_utilizador')->where('tipo', $tipo)->first();
            $idTipoUtilizador = $tipoUtilizador->id;
            $user = new User();
                $user->name = $nome;
                $user->email = $email;
                $user->idTipoUtilizador = $idTipoUtilizador; 
                $user->password=Hash::make($password);
            $sql = $user->save();
            if($sql){
                session()->flash('success',['Registado com successo']);
                return redirect()->back();
               // return redirect()->action([FonteController::class, 'index']);
            }
        } catch (\Throwable $th) {
            session()->flash('error',['Falha no registo'.$th->getMessage()]);
            return redirect()->back();
        }
    }

    
    public function show($id)
    {
        //
        $user = User::where('id',$id)->first();
        $tipoUtilizador = $user->tipoUtilizador()->first();
        if($user){
            echo "<h1>Utilizador: </h1>";
            echo "Nome: {$user->name} <br>";
        }
        if($tipoUtilizador){
            echo "Tipo: {$tipoUtilizador->tipo}";
        }
    }
    
    public function edit(User $user)
    {
         //
         try {
            //code...
            $tipoUtilizador=TipoUtilizador::all();
            return view('layouts.users.update',['user'=>$user,'tipoUtilizador'=>$tipoUtilizador]);
         } catch (\Throwable $th) {
            //throw $th;
            session()->flash('error',['Erro ao carregar página'.$th->getMessage()]);
            return redirect()->back();
         }
         
    }
   
    public function update(Request $request, User $user)
    {
        //
        try {
            //code...
            $nome = $request->nome;
            $email = $request->email;
            $tipo = $request->tipo;
            $password = $request->password;
            $tipoUtilizador = DB::table('tipo_utilizador')->where('tipo', $tipo)->first();
            $idTipoUtilizador = $tipoUtilizador->id;

                $user->name = $nome;
                $user->email = $email;
                $user->idTipoUtilizador = $idTipoUtilizador; 
                $user->password=Hash::make($password);
            $sql = $user->save();
            if($sql){
                session()->flash('success',['atualizado com successo']);
               return redirect()->action([UserController::class, 'index']);
            }
        } catch (\Throwable $th) {
            session()->flash('error',['Falha na atualização'.$th->getMessage()]);
            return redirect()->back();
        }
    }

   
    public function destroy(User $user)
    {
        try {
            //code...
             $model = User::find($user->id );
             $deleted =$model->delete();
            if(!$deleted){
                session()->flash('error',['Erro ao eliminar']);
                return redirect()->back();
        }
            session()->flash('success',['Eliminado com successo']);
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            session()->flash('error',['Erro ao eleminar'.$th->getMessage()]);
            return redirect()->back();
        }
    }
}
