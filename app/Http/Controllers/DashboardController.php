<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class DashboardController extends Controller
{
    public function dashboard() {
        $users = User::all();
        return view('users.user_list', compact('users'));
    }

    public function deleteUser($id) {
        
    }

    public function blockUser($id) {
        $user = User::find($id);

        if($user->is_blocked == 'yes') {
            $user->is_blocked = 'no';
        }else {
            $user->is_blocked = 'yes';
        }
        
        $user->save();

        Session::flash('success', 'User blocked status has changed successfully!');
        return redirect()->back();

    }

    public function addUser() {
        return view('users.add_user');
    }
}
