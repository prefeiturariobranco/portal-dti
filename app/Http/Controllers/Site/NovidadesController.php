<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Model\Icones;
use App\Model\Icones_categorias;
use App\Model\Postagens;
use Illuminate\Http\Request;

class NovidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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

    public function novidades(Request $request){
        if ($request->get('busca')) {
            $postagem = Postagens::where([
                ['ocultar', '=', 0],
                ['titulo', '%'.$request->get('busca').'%']
            ])->get();
        }
        else {
            $postagem = Postagens::where('ocultar', 0)->get();
        }

        return view('site/novidades',
            [
                'icones' => Icones::where('ocultar', 0)->get(),
                'categorias' => Icones_categorias::where('ocultar', 0)->get(),
                'titulo' => '',
                'postagens' => $postagem
            ]);
    }
}
