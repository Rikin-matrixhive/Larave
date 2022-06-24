<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function discount()
    {
    //     $users = DB::table('users')->get();
    //     // return $users;// object format
    //     $users = DB::table('users')->first();
    //     // return $users;//return first records from table

    //     $email = DB::table('users')->where('name', 'rikin')->value('email');
    //    // return $email;  value is use for get specific users email id 

    //     $user = DB::table('users')->find(1);
    //     //return $user;// display first records


    //     $titles = DB::table('users')->pluck('created_at');
    //     //return $titles; // for getting specific reocors all

    //     $titles = DB::table('users')->pluck('id', 'name');
    //     //return $titles; // getting specific reocors as per id and name      

    //     $users = DB::table('users')->count();
    //     //return $users; // for counting all the records
 
    //     $price = DB::table('users')->max('id');

    //     //return $price; //for counting maximum num of the records

    //     $price = DB::table('users')->sum('id');
    //     //return $price;// for sum of all the records

    //     $price = DB::table('users')->avg('id');

    //     //return $price; // getting avrage

    //     $price = DB::table('users')->min('id');

    //    // return $price;// getting minimum value



 
        $users = DB::table('users')
            ->select('name', 'email as user_email')
            ->get();

            //echo var_dump($users);// for select statement


            $query = DB::table('users')->select('name');
            $users = $query->addSelect('name')->get();
            echo $users; // getting only data with name  
            echo "<br>";



            $users = DB::table('users')
             ->select(DB::raw('count(*) as id, name'))
             ->where('name', '<>', 1)
             ->groupBy('id')
             ->get();
             //return $users;// return data as per name and emails


             $user = DB::table('users')
                ->first();


                $randomUser = DB::table('users')
                ->inRandomOrder()
                ->first();

               // return $randomUser;
            
            //dd($user) ;


             $orders = DB::table('users')
                ->selectRaw('email * ? as email', [1.0825])
                ->get();

            //dd($orders);

 
            $first = DB::table('users')
                        ->whereNull('name');
            
            $users = DB::table('users')
                        ->whereNull('email')
                        ->union($first)
                        ->get();    

            //return $users; // for combine two query


            $users = DB::table('users')
                    ->where('id', '>', 1)
                    ->orWhere('name', 'kuldeep')
                    ->get();
          // return $users;
                    

           $query = DB::table('users')->orderBy('name');
 
           $unorderedUsers = $query->reorder()->get();


           //return $unorderedUsers ;

           $users = DB::table('users')
                ->groupBy('id')
                ->having('id', '>', 2)
                ->get();
                
           //s return $users;// for group by

            $users = DB::table('users')->skip(2)->take(2)->get();

            //dd( $users);





            $query = DB::table('users')->orderBy('name');
 
            $unorderedUsers = $query->reorder()->get();


        //   $insert=  DB::table('users')->insert([
        //         'name' => 'jaydeep',
        //         'email' => 'jp@gmail.com',
        //         'password' => '2525252525'
                
        //     ]);
        //     echo $insert;

        //    / dd($insert) ;// for add data


            $locking=DB::table('users')
        ->where('id', '>', 3)
        ->lockForUpdate()
        ->get();

    //    /. dd($locking);

        // $affected = DB::table('users')
        // ->where('id', 1)
        // ->update(['name->enabled' => true]);
        
        // echo $affected;
        // $query = DB::table('users')->select('name');
 
        // $users = $query->addSelect('age')->get();


        $users = DB::select('select * from users where id = ?', [1]);


        // $burgers = DB::scalar(
        //     "select count(case when id = '1' then 1 end) as name from users"
        // );

         $users = DB::connection('mysql')->select('select * from users where id = 1');

         //return $users;





    }

    public function index(){
    }
}   

