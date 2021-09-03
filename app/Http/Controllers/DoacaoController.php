<?php

namespace App\Http\Controllers;

use App\Doacao;
use Illuminate\Http\Request;

class DoacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $doacoes = Doacao::all();

        return view('Doacao.index',compact('doacoes'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doacao  $doacao
     * @return \Illuminate\Http\Response
     */
    public function show(Doacao $doacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doacao  $doacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Doacao $doacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doacao  $doacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doacao $doacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doacao  $doacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doacao $doacao)
    {
        //
    }
}
