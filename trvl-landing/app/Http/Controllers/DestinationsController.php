<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Destinations;

class DestinationsController extends Controller
{
    // If you want to use a stored procedure to get all destinations, you can use DB::select.
    // Example assuming your procedure is called 'get_all_destinations':


        public function index()
        {
            $destinations = DB::select('EXEC get_all_destinations');
            $users =DB::select('EXEC get_all_users');
            

            return view('welcome', compact('destinations','users'));
        }
}
