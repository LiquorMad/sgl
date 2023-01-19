<?php

namespace App\Http\Controllers;

use App\Models\Fonte;
use App\Http\Requests\StoreFonteRequest;
use App\Http\Requests\UpdateFonteRequest;
use Illuminate\Http\Request;


class FonteController extends Controller
{
    
    public function index()
    {
        try {
            //code...
            $fontes=Fonte::all();
            return view('layouts.fonte.fonte')->with('fontes',$fontes);;
        } catch (\Throwable $th) {
            session()->flash('error',['Erro ao carregar página']);
            return redirect()->back();
        }
    }

    public function create()
    {
        //
    }

    public function store(StoreFonteRequest $request)
    {
        //
        try {
            
            //code...
            $endereco = $request->endereco;
            $descricao = $request->descricao;

            $fonte = new Fonte();
                $fonte->endereco = $endereco;
                $fonte->descricao = $descricao;
            $sql = $fonte->save();
            
            if($sql){
                session()->flash('success',['Registado com successo']);
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            session()->flash('error',['Falha no registo']);
            return redirect()->back();
        }
    }

    
    public function show(Fonte $fonte)
    {
        //
    }
  
    public function edit(Fonte $fonte)
    {
        //
        try {
            //code...
            return view('layouts.fonte.update',['fonte'=>$fonte]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function update(UpdateFonteRequest $request, Fonte $fonte)
    {
        //
        try {
            //code...
            $endereco = $request->endereco;
            $descricao = $request->descricao;
            $fonte->endereco = $endereco;
            $fonte->descricao = $descricao;
            $sql = $fonte->save();
            if($sql){
                session()->flash('success',['Atualizar com successo']);
                return redirect()->action([FonteController::class, 'index']);
            }
        } catch (\Throwable $th) {
            session()->flash('error',['Falha na atualização']);
            return redirect()->back();
        }
    }

    public function destroy(Fonte $fonte)
    {
        try {
            //code...
             $model = Fonte::find($fonte->id );
             $deleted =$model->delete();
            if(!$deleted){
                session()->flash('error',['Erro ao eliminar']);
                return redirect()->back();
        }
            session()->flash('success',['Eliminado com successo']);
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            session()->flash('error',['Erro ao eleminar']);
            return redirect()->back();
        }
    }
}
