<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class NewMemberController extends Controller
{
    public function index() {
        return view('new_member');
    }


    public function create() {

        $new_member = new User();
        $new_member->name = request('name');
        $new_member->type = request('user_type');
        $new_member->email = request('email');
        $new_member->password = Hash::make('123');
        $new_member->save();
        return redirect('contributers')->with('success', 'saved successfully');
    }


    public function destroy($id) {

        User::findOrFail($id)->delete();
        return redirect('contributers');
    }
}
