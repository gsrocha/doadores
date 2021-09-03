<?php

namespace App\Http\Controllers;

use App\Doador;
use App\DoadorEndereco;
use App\Doacao;
use Illuminate\Http\Request;

class DoadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $doadores = Doador::paginate(20);
        return view('Doador.index',compact('doadores'));
    }                                       

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $doador = new Doador();
        $endereco = new DoadorEndereco();
        $doacao = new Doacao();
        return view('Doador.create',compact('doador','endereco','doacao'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nome' => 'required|max:255',
            'cpf' => 'required|max:11',
            'email' => 'required|email',
        ]);

        $doador = new Doador();
        $doador->fill($request->all());
        $doador->save();

        $request['id_doador'] = $doador->id;

        $endereco = new DoadorEndereco();
        $endereco->fill($request->all());
        $endereco->save();

        $doacao = new Doacao();
        $doacao->fill($request->all());
        $doacao->definirFormaDePagamento();
        $doacao->save();

        return redirect()->route('doador.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doador  $doador
     * @return \Illuminate\Http\Response
     */
    public function show(Doador $doador)
    {
        //
        return view('Doador.show',compact('doador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doador  $doador
     * @return \Illuminate\Http\Response
     */
    public function edit(Doador $doador)
    {
        //
        $endereco = $doador->endereco;
        return view('Doador.edit',compact('doador','endereco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doador  $doador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doador $doador)
    {
        //
        $doador->fill($request->all());
        $doador->save();

        $endereco = $doador->endereco;
        $endereco->fill($request->all());
        $endereco->save();

        return redirect()->route('doador.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doador  $doador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doador $doador)
    {
        //     
        $endereco = $doador->endereco;
        $endereco->delete(); 
        $doacoes =  $doador->doacao;
        foreach($doacoes as $doacao){
            $doacao->delete();
        }
        $doador->delete();
        return redirect()->route('doador.index');
    }
}
