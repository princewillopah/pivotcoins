<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use App\Deposit;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function dashboard()
    {
      

        return view('admin.admin.dashboard');
        
    }
    public function index()
    {
        $user = User::all();

        return view('admin.admin.members')->with('users',$user);
                                          
    }

   
    public function create()
    {
       
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show($user)
    {
        $user = User::find($user);
        // $userdeposit = User::find($user);
        // $user = User::find($user)->next_of_kin();
        //   $user1 = User::has('next_of_kin')->with('next_of_kin')->get();
        //   $user1 = User::has('next_of_kin')->with('next_of_kin')->first();
        //   $user1 = User::has('next_of_kin')->get();
        // $user1 = User::has('next_of_kin')->first();

        return view('admin.admin.show')->with('user',$user);
                                //  ->with('userchild',$user1);
    }
    // public function alldeposite($id)
    // {
       
    //         $dep = User::findOrFail(1);
    //         $dep->deposits;

    // }
    public function alldeposite($u_id,$d_id)
    {
       // // $userDeposit = User::with('deposits')->get();
        // $userDeposit = Deposit::with('user')->get();
        // return view('admin.admin.showDeposit')->with('userDeposit',$userDeposit);
        // // $restaurantClasses = RestaurantClass::with('restaurants')->get();

        // // to access "children" 
        // // foreach($restaurantClasses as $restaurantClass) {
        // // $restaurantClass->restaurants;
        // // }

           $userDeposit = Deposit::where('user_id',$u_id)->where('id',$d_id)->get();
        return view('admin.admin.showDeposit')->with('userDeposit',$userDeposit);


    }
  

   
    public function edit(admin $admin)
    {
        //
    }

    
    public function update(Request $request, admin $admin)
    {
        //
    }

   
    public function destroy(admin $admin)
    {
        //
    }
}
