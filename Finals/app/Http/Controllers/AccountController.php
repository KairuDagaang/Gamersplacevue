<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\User;

class AccountController extends Controller
{

    public function index() {
        $accounts = Account::orderBy('id')->get();

        return response()->json($accounts);
    }
    
    public function accounts()
    {
        $accounts = Account::all();
        return view('accounts.account', ['accounts' => $accounts]);
    }

    public function create()
    {
        $users = User::all();
        return view('accounts.create', ['users' => $users]);
    }

    public function make(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'account_name' => 'required',    
            'ign' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        $newAccountData = [
            'user_id' => $request->input('user_id'),
            'account_name' => $request->account_name,    
            'ign' => $request->ign,
            'email' => $request->email,
            'password' => $request->password
        ];
    
        Account::create($newAccountData);
    
        return redirect('/accounts')->with('message', "User has made an account successfully");
    }

    public function edit(Account $account)
    {
        $accounts = Account::all();
        $users = User::all();
        return view('accounts.edit', compact('account'), ['users' => $users, 'accounts' => $accounts]);
    }

    public function update(Account $account, Request $request)
    {
        $request->validate([
            'user_id',
            'account_name',    
            'ign',
            'email',
            'password'
        ]);
    
        $newAccountData = [
            'user_id' => $request->input('user_id'),
            'account_name' => $request->account_name,    
            'ign' => $request->ign,
            'email' => $request->email,
            'password' => $request->password
        ];

        $account->update($request->all());
        return redirect('/accounts')->with('message', "Account has been updated successfully");
    }

    public function delete(Account $account)
    {
        $account->delete();
        return redirect('/accounts')->with('message',"$account->ign has been deleted successfully");
    }
}
