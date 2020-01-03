<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
//        $id = Auth::user()->id;
//        $usuario = Auth::user();
//
//        $dados = array(
//
//            'usuario' => $usuario,
//            'titulo' => 'Meu Perfil'
//        );
//        return view('prof.perfil')->withDados($dados);
    }

    public function show($id)
    {
    }


    public function update_avatar (Request $request)
    {

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('avatars',$avatarName);

        $user->avatar = $avatarName;
        $user->save();

        return back()
            ->with('success','Você adicionou uma nova imagem!');
    }

    public function update(User $user)
    {
        if ($user->email == request('email')) {

            $this->validate(request(), [
                'name' => 'required',
                'email' => 'required|email',
            ]);

            $user->name = request('name');
            $user->email = request('email');

        } else {

            $this->validate(request(), [
                'name' => 'required',
                'email' => 'required|email|unique:users'
            ]);

            $user->name = request('name');
            $user->email = request('email');

        }

        if (request('password')) {

            $user->password = bcrypt(request('password'));
        }

        $user->save();

        return redirect()
            ->back()
            ->with('success', 'Perfil de usuário atualizado com sucesso!');

    }
}
