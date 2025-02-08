<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function loginProcess(LoginRequest $request)
    {
        $authenticated =  Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if (!$authenticated) {
            return back()->withInput()->with('error', 'Usuário ou senha inválidos');
        }

        $user = Auth::user();
        $user = User::find($user->id);

        return redirect()->route('user.index');
    }

    public function create()
    {
        return view('login.create');
    }

    public function store(UserRequest $request)
    {
        DB::beginTransaction();

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            DB::commit();

            return redirect()->route('login')->with('success', 'Usuário criado com sucesso');
        } catch (\Exception $e) {
            DB::rollBack();

            return back()->withInput()->with('error', 'Erro ao criar usuário');
        }
    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->route('login')->with('success', 'Logout realizado com sucesso');
    }
}
