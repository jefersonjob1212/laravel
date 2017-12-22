<?php

namespace App\Http\Controllers;

use App\Pessoas;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $pessoas = Pessoas::all();
       return view("pessoas.index", ['todaspessoas'=>$pessoas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view("pessoas.create");
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
       $this->validate($request, [
            'nome' => 'required',
            'data_nascimento' => 'required',
            'cpf' => 'required',
            'endereco' => 'required',
            'complemento' => '',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required'
        ]);

       $Pessoas = new Pessoas;
       $Pessoas->nome = $request->nome;
       //dd($request->data_nascimento);
       $Pessoas->data_nascimento = date('Y-m-d', strtotime($request->data_nascimento));
       //$Pessoas->data_nascimento = $request->data_nascimento;
       $Pessoas->cpf = $request->cpf;
       $Pessoas->endereco = $request->endereco;
       $Pessoas->complemento = $request->complemento;
       $Pessoas->bairro = $request->bairro;
       $Pessoas->cidade = $request->cidade;
       $Pessoas->uf = $request->uf;
       $Pessoas->save();
       echo $request->nome;
       return redirect('pessoas')->with('message', 'Pessoa atualizada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pessoas  $Pessoas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pessoas = Pessoas::find($id);
        if(!$pessoas)
             abort(404);

        return view('pessoas.details')->with('detailpage', $pessoas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pessoas  $Pessoas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pessoas = Pessoas::find($id);
        if(!$pessoas)
          abort(404);

        return view('pessoas.edit')->with('detailpage', $pessoas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pessoas  $Pessoas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'nome' => 'required',
            'data_nascimento' => 'required',
            'cpf' => 'required',
            'endereco' => 'required',
            'complemento' => '',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required'
        ]);

        $PessoasUpdate = Pessoas::find($id);
        $PessoasUpdate->nome = $request->nome;
        $PessoasUpdate->data_nascimento = date('Y-m-d', strtotime($request->data_nascimento));
        $PessoasUpdate->cpf = $request->cpf;
        $PessoasUpdate->endereco = $request->endereco;
        $PessoasUpdate->complemento = $request->complemento;
        $PessoasUpdate->bairro = $request->bairro;
        $PessoasUpdate->cidade = $request->cidade;
        $PessoasUpdate->uf = $request->uf;
        $PessoasUpdate->save();
        return redirect('pessoas')->with('message', 'Pessoa editada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pessoas  $Pessoas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    $Pessoas = Pessoas::find($id);
    $pessoas->delete();
    return redirect('pessoas')->with('message', 'Pessoa apagada com sucesso');
    }
}
