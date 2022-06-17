<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function discount(Request $request)
    {
        // return URL::temporarySignedRoute(
        //     'discountCode', now()->addMinutes(1)
        // );
        // $url = action([HomeController::class, 'index'], ['id' => 1]);

        // return $url;
        $value =session('key');

        $request->session()->increment('count');
 
        $request->session()->flash('status', 'Task was successful!');
        return $request;





    }

    public function index(){
    }
}

