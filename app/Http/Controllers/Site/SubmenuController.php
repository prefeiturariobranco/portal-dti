<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Sub_Icone;
use App\Model\Icones_categorias;
use App\Model\Icones;

class SubmenuController extends Controller
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

    public function submenu($id){
        $sub_icones = Sub_Icone::where('icones_id', $id)->get();

        if (count($sub_icones) <= 0) {
            return redirect('/');
            exit();
        }

        $icone = Icones::where('id', $sub_icones[0]->icones_id)->first();

        if ($icone->dinamico == '2') {
            return redirect('/error/404');
            exit();
        }

        if (empty($icone)) {
            return Redirect::to('/error/404');
            exit();
        }


        return view('site/submenu', [
            'icones' => Icones::where('ocultar', 0)->get(),
            'subIcones' => $sub_icones,
            'categorias' => Icones_categorias::where('ocultar', 0)->get(),
            'titulo' => '',
        ]);
    }

}
