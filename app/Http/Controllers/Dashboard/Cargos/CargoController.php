<?php

namespace App\Http\Controllers\Dashboard\Cargos;

use App\Model\Cargos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Cargos\CargosFormResquest;//Usar para retornar mensagens
use Illuminate\Support\Facades\Session;
use PHPUnit\Exception;

class CargoController extends Controller
{
    //Lista todos os cargos atuais
    public function index()
    {
        return view('painel.cargos.lista', [
            'cargos' => Cargos::all()
        ]);
    }

    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    //salva no banco novo cargo
    public function create(Request $request)
    {
        $valited = $request->validate([
            'nome' => 'required|max:255',
        ]);
        if (!empty($request->nome)) {
            $cargo = Cargos::create([
                'nome' => $request->nome,
            ]);
        } else {
            return redirect()->route('cadastro.cargos');
        }
        $resultado['error'] = 1;
        $resultado['msg'] = 'Cargo cadastrado com sucesso!';
        if (!$cargo) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao cadastrar cargo!';
        }
        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/cargos');
    }

//Retorna tela para cadastro
    public function cadcreate()
    {
        return view('painel.cargos.cadastro');
    }

    //Função que deleta cargo
    public function delete($id)
    {
        //adcionar mensagem de exclusão concluida com sucesso
        try {
            if (!is_null($id)) {
                Cargos::where('id', $id)->delete();
                return redirect()->route('lista.cargos');
            } else {
                //mensagem, não foi possivel excluir esse registro
                return redirect()->route('lista.cargos');
            }
        } catch (\Exception $exception){
            return redirect()->route('lista.cargos')->withErrors(['error' => $exception->getMessage()]);
        }


    }
    //Função que retorna a view de formulario para editar cargo
    public function edit($id)
    {
        return view('painel.cargos.edita', [
            'cargos' => Cargos::where('id', $id)->first(),
        ]);

    }
    //edita cargo
    public function update(Request $request ){
        try {
            $id = $request->id;
            $nome = $request->nome;
            if (!empty($nome) && !empty($id)) {
              Cargos::where('id', $id )->update([
                    'nome' => $nome,
                ]);

              $resultado['error'] = 1;
              $resultado['msg'] = "Cargo alterado com sucesso";

              if (!$nome) {
                  $resultado['error'] = 2;
                  $resultado['msg'] = "Falha ao alterar cargo";
              }
              Session::flash('erro_msg', $resultado);
            } else {
                return redirect()->route('edita.cargos');
            }
            return redirect()->route('lista.cargos');

        }catch (Exception $exception){
            //mensagen de erro
            return redirect()->route('edita.cargos');
        }


    }
}
