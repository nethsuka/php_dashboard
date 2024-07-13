<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class LinkController extends Controller
{

    public function __construct() {
        //this middleware applies for the all the functions in the class
        $this->middleware('auth');
    }


    public function index() {

        $links = Link::all();

        return view('links', ['links' => $links]);
    }


    public function update($id) {

        $link = Link::findOrFail($id);
        $link->url = request('url');
        $link->passwordForAccount = request('pw');

        if($link->save()) {
            return redirect()->back()->with('success', 'Link updated successfully');
        }else{
            return redirect()->back()->with("error", "Coulden't update the Link");
        }
    }


    public function store() {

        $new_link = new Link();
        $new_link->name = request('name');
        $new_link->url = request('url');
        $new_link->passwordForAccount = request('pw');

        if($new_link->save()) {
            return redirect('/links')->with('success', 'Link added successfully');
        }else{
            return redirect('/links')->with("error", "Coulden't add the Link, pls ty again");
        }

    }

    public function destroy($id) {

        $record = Link::findOrFail($id);
        $record->delete();
        return redirect('/links');
    }
}
