<?php

namespace App\Http\Controllers;


use App\Admin;
use App\User;
use App\Deposit;
use Illuminate\Http\Request;

class UsersController extends Controller
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
    public function show($user)
    {
        $user = User::find($user);
        return view('admin.admin.show')->with('user',$user);                      
    }

    public function member_deposit_index($member_id)
    {
        $deposits = Deposit::where('user_id', $member_id)->get();
        $totalDeposit = Deposit::where('user_id', $member_id)->sum('deposit_amount');
        $depositor = User::find($member_id);
        // return view('admin.admin.showDeposit', compact('deposits', 'user_id'));
        return view('admin.admin.showDeposit')->with('deposits',$deposits)->with('user_id',$member_id)
                                              ->with('depositor',$depositor)->with('totalDeposit',$totalDeposit);
    }
    // public function member_deposit_create($member_id)
    // {
    //     $deposits = Deposit::where('user_id', $member_id)->get();
    //     // $depositor = User::find($member_id);
    //     return view('admin.admin.createDeposit')->with('deposits',$deposits)->with('user_id',$member_id);
    //     // ->with('depositor',$depositor);
    // }
    // public function member_deposit_store($member_id)
    // {
    //     $deposits = Deposit::where('user_id', $member_id)->get();
    //     $depositor = User::find($member_id);
    //     // return view('admin.admin.showDeposit', compact('deposits', 'user_id'));
    //     return view('admin.admin.showDeposit')->with('deposits',$deposits)->with('user_id',$member_id)->with('depositor',$depositor);
    // }
    public function member_deposit_store($member_id, Request $request)
    {
        Deposit::create($request->all() + ['user_id' => $member_id]);
        return redirect()->route('member.deposit.index', $member_id);
    }
    public function member_deposit_update($member_id,$deposit_id, Request $request)
    {
        $request->validate([
            'deposit_amount'     =>  'required',
        ]);
        $deposit =  Deposit::find($member_id)->find($deposit_id);
        $deposit->update($request->all());
        return redirect()->route('member.deposit.index', $member_id);
    }
    public function member_deposit_destroy($member_id,$deposit_id)
    {
        $deposit =  Deposit::find($member_id)->find($deposit_id);
        $deposit->delete();
        return redirect()->route('member.deposit.index', $member_id);
    }
    






}
