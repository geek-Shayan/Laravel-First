<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function peopleList()
    {
        $people = ['sadi', 'smaira', 'shakibur', 'tahmeed', 'tousif' ];
        //$id = ['1', '2', '3', '4' ];
    
        return view('internals.people',['peoples_list' => $people]);
    }
}
