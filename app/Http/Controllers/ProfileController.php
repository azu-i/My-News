<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Profile;

class ProfileController extends Controller
{
    //
    public function index(Request $request){
        $profile = Profile::all()->sortByDesc('updated_at');
        
        //  if (count($profile) > 0) {
        //     $headline = $profile->shift();
        // } else {
        //     $headline = null;
        
        // }
        return view('Profile.index', ['profile' => $profile]);
    }
}
