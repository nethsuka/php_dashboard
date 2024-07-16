<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('profile');
    }

    public function update($id) {

        $current_user = User::findOrFail($id);
        $current_user->name = request('name');
        $current_user->email = request('email');
        $process = $current_user->save();

        if($process){
            return redirect()->back()->with('success', 'Profile updated successfully');
        }else{
            return redirect()->back()->with("error", "Coulden't update the profile");
        }
    }
}
