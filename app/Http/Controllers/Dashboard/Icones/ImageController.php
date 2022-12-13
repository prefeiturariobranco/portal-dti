<?php

namespace App\Http\Controllers\Dashboard\Icones;

use App\Http\Controllers\Controller;
use App\Model\Icones;
use App\Model\Icones_categorias;
use App\Model\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ImageController extends Controller
{

    public function index()
    {
        return view('painel.icones.imagens.lista', [
            'imagens' => Images::all()
        ]);
    }
    public function create()
    {
        return view('painel.icones.imagens.cadastro');
    }

    public function store(Request $request)
    {
        if (!empty($request->file('caminho'))) {
            $fileName =  $request->file('caminho')->store('public/icones');
        }

        $imagem = Images::create([
            'nome' => $request->post('nome'),
            'caminho' => $fileName
        ]);
        $resultado['error'] = 1;
        $resultado['msg'] = 'Imagem cadastrada com sucesso!';

        if (!$imagem) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao cadastrar imagem';
        }
        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/icones');
    }

    public function edit($id)
    {
        return view('painel.icones.imagens.editar', [
            'imagem' => Images::where('id', $id)->first()
        ]);
    }

    public function update(Request $request)
    {
        $imagem = Images::where('id', $request->imagem_id)->first();

        if (!empty($request->file('caminho'))) {
            \Storage::delete($imagem->caminho);
            $fileName = $request->file('caminho')->store('public/icones');
            $imagem->caminho = $fileName;
        }

        $imagem->nome = $request->post('nome');

        $resultado['error'] = 1;
        $resultado['msg'] = 'Imagem alterada com sucesso.';

        if (!$imagem) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao alterar imagem';
        }
        $imagem->save();

        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/icones');
    }
}
