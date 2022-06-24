<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Flight;
use App\Models\User;
class DemoController extends Controller
{
    public function Listing_Data()
    {

        //return DB::connection('mysql2')->table('demotables')->get();

        //    $update= DB::update('update users set id = 5');
        //    echo $update;

        // $delete=DB::delete('delete from usesrs where id = 1');
        // return $delete;

        $pagination = DB::table('users')->count();
        // return $pagination;
        // $currentPage = DB::table('users')->currentPage();
        //return $currentPage;// error;

        // $firstItem = DB::table('users')->firstItem();
        // //return $firstItem;
        // $getOptions = DB::table('users')->getOptions();
        // $getUrlRange = DB::table('users')->getUrlRange();
        // $hasPages = DB::table('users')->hasPages();
        // $hasMorePages = DB::table('users')->hasMorePages();
        // $items = DB::table('users')->items();
        // $lastItem = DB::table('users')->lastItem();
        // $lastPage = DB::table('users')->lastPage();
        // $nextPageUrl = DB::table('users')->nextPageUrl();
        // $total = DB::table('users')->total();
        // return $total;
        // $url = DB::table('users')->url();
        // $getPageName = DB::table('users')->getPageName();
        // $setPageName = DB::table('users')->setPageName();
        // $pagination = DB::table('users')->paginate(4);

        //sreturn $pagination;
        //return $users;

        $results = DB::select('select * from users where id = :id', ['id' => 1]);
        //return $results;


        //    $add_data= DB::insert('insert into users (name,email,password) values (?, ?)', ['Marc','m@gmail.com','1235678']);
        //    return $add_data;

        //-----------------------------------------------------------------------------------------------------------------------
        // Eloquent model
        //-----------------------------------------------------------------------------------------------------------------------



        //------------------------------------------------------------------------------------------------------------------------------------------
        // getting Data: Once you have created a model and its associated database table, you are ready to start retrieving data from your database. 
        //-------------------------------------------------------------------------------------------------------------------------------------------

//         echo "";

//         foreach (Flight::all() as $flight) {

//             echo $flight->name;
//             echo "<br>";
//         }
//         echo "<hr>";

//         /*
//         Building Queries:However, since each Eloquent model serves as a query builder, you may add additional constraints to queries and then invoke the get method to retrieve the results:
//         */

//         $flights = Flight::where('airline', 'Spicejet')
//             ->orderBy('name')
//             ->take(10)
//             ->get();

//         echo $flight;

//         /*
//       Refreshing models
  
//      */

//         $flight = Flight::where('id', '3')->first();

//         $freshFlight = $flight->fresh();
//         echo $freshFlight;

//         /*
//         Collection model
//        */


//       $flights = Flight::where('name', 'Indigo')->get();
      
//       echo "<hr>";
//       $flights = $flights->reject(function ($flight) {
//         echo $flight;
//       });
//       echo "<hr>";


//         /*
//         chunck in laravel 
//        */

//       Flight::chunk(3, function ($flights) {
//         foreach ($flights as $flight) {
//             echo $flight;

//         }
//     });
//         /*
//         Chunk by id
//        */
//     Flight::where('name', true)
//     ->chunkById(200, function ($flights) {
//         $flights->each->update(['airline' => false]);
//     }, $column = 'id');


//     /*
//      Advanced Subqueries
//     */
//     echo "<hr>";
//     echo Flight::addSelect(['name' => User::select('email')
//     ->whereColumn('id', 'id')
//     ->orderByDesc('id')
//     ->limit(1)
//     ])->get();
//     echo "<hr>";
//     /*
//       Retrieving Single Models / Aggregates
//     */
//     // Retrieve a model by its primary key...
    
//     $flight = Flight::find(1);
//     echo "<pre>";
//     echo $flight;

//     echo "<hr>";

// // // Retrieve the first model matching the query constraints...
//      $flight = Flight::where('id', 1)->first();
//      echo $flight;

//      echo "<hr>";

// // // Alternative to retrieving the first model matching the query constraints...
//     $flight = Flight::firstWhere('name', 'Air india');
//     echo $flight;
//     echo "<hr>";


//   /* Not Found Exceptions*/

//     $flight = Flight::findOrFail(1);
//     echo $flight;
//     echo "<hr>";

//     $flight = Flight::where('id', '>', 1)->firstOrFail();
//     echo $flight;
//     echo "<hr>";
     
//     /*  Retrieving Or Creating Models */


//     $flight = Flight::firstOrCreate([
//         'name' => 'Indigo'
//     ]);
//     echo $flight;

//     echo "<hr>";

//     $flight = Flight::firstOrNew([
//         'name' => 'Kingfisher'
//     ]);

//     echo $flight;
//     echo "<hr>";


//     /* Retrieving Aggregates */

//     $count = Flight::where('id', 1)->count();
//     echo "<hr>";
//     echo $count;
    

//     $max = Flight::where('name','Kingfisher')->max('id');

//     echo "<hr>";
//     echo $max;

//     $name = 'jaydeep';
//     $email = 'jps@gmail.com';
//     $password = 12345678;
   
//     echo Flight::where('id', 1)
//       ->where('name', 'skyair')
//       ->update(['name' => 'skyair']);



//     // $user = User::create([
//     //     'name' => 'jjjlkj;kl',
//     //     'email' => 'jjjlkj;kl@gmail.com',
//     // ]);s
     
     
//     $phone = User::find(1)->Flight;
//     //dd($phone);

   return User::all();




}
public function store(Request $request)
    {
        // Validate the request...
        $flight = new Flight;
 
        $flight->name = $request->name;
 
        $flight->save();

       

 
        $flight = Flight::find(1);
         
        $flight->name = 'Paris to London';
        echo $flight;

        $flight->save();
    }
}
