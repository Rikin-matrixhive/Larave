<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    public function Listing_Data(){

        //return DB::connection('mysql2')->table('demotables')->get();

    //    $update= DB::update('update users set id = 5');
    //    echo $update;
 
        // $delete=DB::delete('delete from usesrs where id = 1');
        // return $delete;

        $pagination = DB::table('users')->count();
       // return $pagination;
        $currentPage = DB::table('users')->currentPage();
        //return $currentPage;// error;

        $firstItem = DB::table('users')->firstItem();
        //return $firstItem;
        $getOptions = DB::table('users')->getOptions();
        $getUrlRange = DB::table('users')->getUrlRange();
        $hasPages = DB::table('users')->hasPages();
        $hasMorePages = DB::table('users')->hasMorePages();
        $items = DB::table('users')->items();
        $lastItem = DB::table('users')->lastItem();
        $lastPage = DB::table('users')->lastPage();
        $nextPageUrl = DB::table('users')->nextPageUrl();
        $total = DB::table('users')->total();
        return $total;
        $url = DB::table('users')->url();
        $getPageName = DB::table('users')->getPageName();
        $setPageName = DB::table('users')->setPageName();
        $pagination = DB::table('users')->paginate(4);

        //sreturn $pagination;
        //return $users;

        $results = DB::select('select * from users where id = :id', ['id' => 1]);
        //return $results;

 
    //    $add_data= DB::insert('insert into users (name,email,password) values (?, ?)', ['Marc','m@gmail.com','1235678']);
    //    return $add_data;
    	




        

    }
}
