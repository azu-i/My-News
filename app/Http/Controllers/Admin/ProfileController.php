<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\ProfileHistory;
use Carbon\Carbon;

class ProfileController extends Controller
{
    //
   public function add()
   {
       return view('admin.profile.create');
   }
   
  public function create(Request $request)
  {
      return redirect('admin/profile/create');
  }
   public function edit()
   {
       
       return view('admin.profile.edit');
   }
   public function update()
   {
      $this->validate($request,Profile::$rules);
       
      $profile=new Profile;
      $form=$request->all();
       
      unset($form['token']);
      $profile->fill($form)->save();
      
      $profilehistory=new ProfileHistory;
      $profilehistory->profile_id=$profile_id;
      $profilehistory->edited_at = Carbon::now();
      $profilehistory->save();
      
       return redirect('admin/profile/edit');
   }
   
}

