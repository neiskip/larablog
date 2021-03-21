<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class AdminController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.dashboard')->with('users',$users);
    }

    public function create(){
        return view('admin.create');
    }

    public function store(AdminRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin.index')->with('success', 'Пользователь успешно создан');
    }

    public function edit($id)
    {
        $user = User::find($id);
        if(!$user)
            return abort(404);

        return view('admin.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        Validator::make($request, [
            'name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
        ]);
        $user = User::find($id);
        if(!$user)
            return abort(404);
            if($user->email != $request->email)
              $user->email = $request->email;
        $user->name = $request->name;
        $user->email_verified_at = $request->email_verified ? time() : NULL;
        $user->update();
        return redirect()->route('admin.index')->with('success', 'Пользователь успешно отредактирован');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if(!$user)
            return abort(404);

        $user->delete();
        return redirect()->route('admin.index')->with('success', 'Пост успешно удален');
}
}
