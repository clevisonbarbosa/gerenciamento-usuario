<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderByDesc('id')->paginate(2);
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect()->route('user.index')->with('success', 'Usuário cadastrado com sucesso!');
    }

    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('user.show', ['user' => $user->id])
                        ->with('success', 'Usuário Atualizado com sucesso!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Usuário deletado com sucesso!');
    }
}
