<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function view()
    {
        $users = User::all();
        return view('admin.view')->with('users', $users);
    }
public function edit(Request $request, $id)
{
    $users = User::findorFail($id);
    return view('admin.edit')->with('users', $users);
}

public function editupdate(Request $request, $id)
{

    $request->validate([
        'name' => 'required',
        'email' => 'required',
       ]);


        $users = user::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->update();

        return redirect('/admin')->with('Status', 'Client is Updated');

    }
    public function delete($id)
    {
        $users = User::findorFail($id);
        $users->delete();

        return redirect('/admin')->with('Status', 'Client is Deleted');
    }

    

 }

