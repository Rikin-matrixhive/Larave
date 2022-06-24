<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use Illuminate\Support\Collection;


class CollectionController extends Controller
{
    public function index()
    {
        return view('collection');


        //for collection

        $users->contains(1);
 
$users->contains(User::find(1));
    }
    public function store(Request $request)
    {
        $crud = new Flight;
        // dd($request->all());
        $crud->airline =  $request->get('airline');
        $crud->airline2 = $request->get('airline2');
        $crud->save();

        if ($crud->save()) {
            echo "Data Added";
        } else {
            echo "data is not added";
        }
    }



    public function show()
    {
        $user = Flight::find(1);

        $firstName = $user->airline;
        echo $firstName;
    }
}
