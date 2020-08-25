<?php

namespace App\Http\Controllers\Dashboard\Tutoriais;

use App\Http\Controllers\Controller;
use App\Model\Tutoriais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DeletarTutoriaisController extends Controller
{

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tutorial = Tutoriais::where('id', $id)->update([
            'ocultar' => 1,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Tutoriais removida com sucesso!";

        if (!$tutorial) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao remover tutoriais";
        }

        Session::flash('ero_msg', $tutorial);
        return Redirect::to('painel/tutoriais');
    }
}
