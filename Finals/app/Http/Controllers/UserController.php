<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('id')->get();

        return response()->json($users);
    }

    public function users()
    {
        $users = User::all();
        return view('users.user', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function make(Request $request)
    {
        $request->validate([
            'fname'     => 'required',    
            'lname'     => 'required',
            'location'   => 'required'
        ]);

        User::create([
            'fname'     => $request->fname,    
            'lname'     => $request->lname,
            'location'   => $request->location
        ]);
        return redirect('/users')->with('message', 'A new User has been created');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'fname'     => 'required',    
            'lname'     => 'required',
            'location'   => 'required'
        ]);

        $user->update($request->all());
        return redirect('/users')->with('message', "User #  $user->id  has been updated successfully");
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect('/users')->with('message',"$user->fname has been deleted successfully");
    }
}
