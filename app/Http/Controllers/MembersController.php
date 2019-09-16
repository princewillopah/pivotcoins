<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class MembersController extends Controller
{
    
    public function profile()
    {
        return view('admin.admin.profile')->with('user', Auth::user());                      
    }

    public function profileEdit()
    {
        $user = Auth::user();
        return view('admin.admin.profile-edit')->with('user', $user);                      
    }
    public function profileStore(Request $request)
    {
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'walletId' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'photo'    => ['sometimes','file','image','max:5000'],
	    ]);
        $user = Auth::user();

        if($request->hasFile('avatar')){
            $myavatar = $request->file('avatar');
            $file_name = time().'-'. $user->name.'-'. $myavatar->getClientOriginalName();
            Image::make($myavatar)->resize(300, 200)->save(public_path('/uploads/'.$file_name));
	        // $myimage->move('uploads/images',$file_name);
            // $formInput['image'] = $file_name;
            $user->photo = $file_name;
            $user->save();
        }
        // $user->update([
        //     $user->name = $request->name,
        //     $user->lastname = $request->lastname,
        //     $user->phone = $request->phone,
        //     $user->walletid = $request->walletid,
        // ]);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->walletid = $request->walletid;
        $user->save();

        return redirect()->route('profile');                      
    }

}
