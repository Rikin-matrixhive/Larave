<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function discount()
    {
        return URL::temporarySignedRoute(
            'discountCode', now()->addMinutes(1)
        );
        
    }
}

