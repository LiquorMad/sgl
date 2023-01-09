<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Fonte;
use Illuminate\Support\Facades\DB;

class LinkController extends Controller
{

    public function index()
    {
        //
        try {
            //code...
            $links = Link::dataToUSer();
            $fontes = Fonte::all();
            $fontesAuto = $fontes;
            return view('layouts.links.links', 
                ['links' => $links, 
                'fontes' => $fontes, 
                'fontesAuto' => $fontesAuto]);
        } catch (\Throwable $th) {
            session()->flash('error', ['Erro ao carregar página' . $th->getMessage()]);
            return redirect()->back();
        }
    }

    public function create()
    {
        //
    }

    public function store(StoreLinkRequest $request)
    {
        //
        try {
            //code...~
            $endereco = $request->endereco;
            $descricao = $request->descricao;
            $link_fonte = $request->fonte;

            $fonte = DB::table('fontes')->where('endereco', $link_fonte)->first();
            $idFonte = $fonte->id;
            $link = new Link();
                $link->endereco = $endereco;
                $link->descricao = $descricao;
                $link->idFonte = $idFonte;
            $sql = $link->save();
            if ($sql) {
                session()->flash('success', ['Registado com successo']);
                return redirect()->back();
                // return redirect()->action([FonteController::class, 'index']);
            }
        } catch (\Throwable $th) {
            session()->flash('error', ['Falha no registo' . $th->getMessage()]);
            return redirect()->back();
        }
    }
    
    public function autoStore(StoreLinkRequest $request)
    {
        try {
            //code...
            $linkGenarated = array();
            $fonte = $request->fonte;
            $linkGenarated = Link::spiderLink($fonte);
            $arrayLength = count($linkGenarated);
            
            $idFonte = DB::table('fontes')->where('endereco', $fonte)->first()->id;
            $descricao = $request->descricao;
            $count = 0;
            foreach($linkGenarated as $link){
                $sql = DB::table('links')->insert([
                    ['endereco' => $link, 'idFonte' => $idFonte,'descricao'=>$descricao]
                ]);
                if($sql){
                    $count ++;
                }
            }
                session()->flash('info', ['Foram registados '.$count.' links da fonte '.$fonte]);
                return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            session()->flash('error', ['Falha no registo' . $th->getMessage()]);
            return redirect()->back();
        }
    }

    public function show(Link $link)
    {
        //
    }

    public function edit(Link $link)
    {
        //
        try {
            $fontes = Fonte::all();
            return view('layouts.links.update', ['link' => $link, 'fontes' => $fontes]);
        } catch (\Throwable $th) {
            //throw $th;
            session()->flash('error', ['Erro ao carregar página' . $th->getMessage()]);
            return redirect()->back();
        }
    }

    public function update(UpdateLinkRequest $request, Link $link)
    {
        //
        try {
            //code...~
            $endereco = $request->endereco;
            $descricao = $request->descricao;
            $link_fonte = $request->fonte;

            $fonte = DB::table('fontes')->where('endereco', $link_fonte)->first();
            $idFonte = $fonte->id;
            $link->endereco = $endereco;
            $link->descricao = $descricao;
            $link->idFonte = $idFonte;
            $sql = $link->save();
            if ($sql) {
                session()->flash('success', ['Atualizado com successo']);
                return redirect()->action([LinkController::class, 'index']);
            }
        } catch (\Throwable $th) {
            session()->flash('error', ['Falha no registo' . $th->getMessage()]);
            return redirect()->back();
        }
    }

    public function destroy(Link $link)
    {
        try {
            //code...
            $model = Link::find($link->id);
            $deleted = $model->delete();
            if (!$deleted) {
                session()->flash('error', ['Erro ao eliminar']);
                return redirect()->back();
            }
            session()->flash('success', ['Eliminado com successo']);
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            session()->flash('error', ['Erro ao eleminar' . $th->getMessage()]);
            return redirect()->back();
        }
    }
}
