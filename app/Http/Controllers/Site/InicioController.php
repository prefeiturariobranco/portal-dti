<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Model\Icones;
use App\Model\Perguntas;
use App\Model\Postagens;
use App\Model\Tutoriais;

use App\Model\Usuarios;
use App\User;
use Illuminate\Http\Request;


use App\Model\Contadores_site;
use App\Model\Icones_categorias;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        Contadores_site::create([
            'ip' => $_SERVER['REMOTE_ADDR'],
            'data_criacao' => date('Y-m-d')
        ]);


        return view('site/inicio', [
            'categorias' => $this->retornaCategoriaIcone(),
            'postagem' => Postagens::where('ocultar', 0)->get(),
            'tutoriais' => Tutoriais::all(),
            'perguntas' => Perguntas::where('ocultar', 0)->get()
        ]);

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    //Retorna a categorias dos Icones
    public function retornaCategoriaIcone(){
        $icones = new Icones();
        $resultSql = $icones->buscar();

        $array = array();

        foreach ($resultSql as $dados) {
            if (array_key_exists($dados->categoria, $array)) {
                $array[$dados->categoria]['icone'][] = array('nome' => $dados->nome,
                    'dinamico' => $dados->dinamico, 'link' => $dados->link, 'id' => $dados->id,
                    'caminho' => $dados->caminho);
            }

            if (!array_key_exists($dados->categoria, $array)) {
                $array[$dados->categoria] = array(
                    'icone' => array(
                        array('nome' => $dados->nome, 'dinamico' => $dados->dinamico,
                            'link' => $dados->link, 'id' => $dados->id,
                            'caminho' => $dados->caminho)));
                $array[$dados->categoria]['nomeCategoria'] = array('nomeCategoria' => $dados->categoria);
            }
        }

        return $array;
    }
}
