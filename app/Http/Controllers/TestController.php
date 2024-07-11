<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show(){
        // $list = [
        //     ['type' => 'lazy','num' => 20],
        //     ['type' => 'active','num' => 10],
        //     ['type' => 'super','num' => 5]
        // ];

        $list = Member::all();
    
        $name = request('name');
        $age = request('age');
    
        return view('test1', ['list' => $list, 'name' => $name, 'age' => $age]);
    }
}
