<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Usuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CheckLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $login = trim($request->post('usuario'));
        $password = $request->post('senha');
        $msg = null;
        $usuario = Usuarios::where('login', $login)->first();
        if ($usuario) {
            if (Hash::check($password, $usuario->senha)) {
                if ($usuario->status == 2) {$msg = 'Usuário bloqueado. Por favor entre em contato com nosso suporte';}
                if ($usuario->status == 0) {
                    Session::put([
                        'DTI_PORTAL' => $usuario->id,
                        'usuario' => $usuario,
                    ]);
                    return Redirect::to('/painel');
                }
            }else {
                $msg = 'Usuário ou Senha Incorretos';
            }
        }
        else{
            $msg = 'Usuário ou Senha Incorretos';
        }
        return view('login/login', [
            'erro_msg' => $msg,
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

}
