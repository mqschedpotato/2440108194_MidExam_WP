<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{

    public function index(Request $request)
    {
        $user = 0;
        if($request->user_id == 1) {
            $color = 'gold';
        } elseif($request->user_id == 2) {
            $color = 'green';

        } else {
            $color = 0 ?? '';
        }


        return view('homepage',compact('user','request','color'));
    }
}
