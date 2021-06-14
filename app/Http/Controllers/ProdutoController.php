<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Block\Element\Document;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro = null;
        
        $registros = DB::table('produtos')->get();


        return view('produto.index', ['produtos' => $registros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('produto.novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'descricao'  => '|min:5|max:32',
            'valor'      => '|min:1|max:32',
            'quantidade' => '|min:1|max:32',
            'tipo'       => '|min:1|max:10'
        ]);

        $produto = [
            'descricao'   => $request->input('descricao'),
            'valor'       => $request->input('valor'),
            'quantidade'  => $request->input('quantidade'),
            'slug'        => $request->input('tipo')
        ];

        if (DB::table('produtos')->insert($produto)) {
            return redirect('produto')->with('mensagem', 'Criado com sucesso!');
        }

        return redirect('produto')->with('error', 'Nada foi criado!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $registro = DB::table('produtos')->where('id', $id)->first();
        return view('produto.exibir', ['produto' => $registro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = DB::table('produtos')->where('id', $id)->first();

        return view('produto.editar', ['produto' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'descricao'  => '|min:5|max:32',
            'valor'      => '|min:1|max:32',
            'quantidade' => '|min:1|max:32',
            'tipo'       => '|min:1|max:10'
        ]);

        $produto = [
            'descricao'   => $request->input('descricao'),
            'valor'       => $request->input('valor'),
            'quantidade'  => $request->input('quantidade'),
            'slug'        => $request->input('tipo')
        ];

        if (DB::table('produtos')->where('id', $id)->update($produto)) {
            return redirect('produto')->with('mensagem', 'Alterado com sucesso!');
        }

        return redirect('produto')->with('error', 'Nada foi alterado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (DB::table('produtos')->where('id', $id)->delete()) {
            return redirect('produto')->with('mensagem', 'Excluido com sucesso!');
        }
        
    }
}
