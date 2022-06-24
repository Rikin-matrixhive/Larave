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


    }
    public function store(Request $request)
    {
        $crud = new Flight;
     //sdd($request->all());
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
  
    }
}