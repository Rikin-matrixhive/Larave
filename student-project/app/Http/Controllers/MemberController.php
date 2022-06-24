<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Busdata;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $details= Busdata::all()->toArray();
        // return $details;

Storage::disk('local')->put('example3.txt', 'this is exdfsfdssdsdsdsdsddfddample3');
echo asset('storage/example3.txt'); // for url


$content = "This  is main file";
Storage::put('main.txt', $content);


$contents = Storage::get('main.txt');
echo $contents;

//return Storage::download('main.txt');

$url = Storage::url('main.txt');
echo $url;



$size = Storage::lastModified('main.txt');

return $size ;



 
$url = Storage::temporaryUrl(
    'main.txt', now()->addMinutes(5)
);
echo "<br>";
dd($url) ;






//sdd(asset('storage'));

// echo asset('example.txt');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("unsubscribe");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
