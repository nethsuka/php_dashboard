<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ContributersController extends Controller
{
    
    public function __construct() {
        //this middleware applies for the all the functions in the class
        $this->middleware('auth');
    }


    public function index() {

        $user_list = User::all();

        return view('contributers', ['user_list' => $user_list]);
    }


    public function show($id) {
        
        $member = User::find($id);
        return view('position_change', ['member' => $member]);
    }

    public function update($id) {
        
        $selected_member = User::find($id);
        $selected_member->type = request('member_type');
        $selected_member->save();

        if($selected_member->save()) {
            return redirect('/contributers')->with('success', 'Changes saved successfully!');
        }else{
            return redirect('/contributers')->with("error", "Couldn't save changes");
        }
    }
}
