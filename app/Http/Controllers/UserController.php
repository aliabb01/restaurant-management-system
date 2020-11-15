<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Image;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    
    public function index()
    {
        $users =User::all();
        return view('my-profile',['users'=>$users]);
    }
    //
    public function updateavatar(Request $request){

    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}

    	return view('welcome' );

    }
    public function show( $user)
    {
      
        $users=User::findOrFail($user);
        return view('prodel')->with('users',$users);
      
    }
    public function destroy( $user)
    {
        $users=User::find($user);
        $users->delete();
        
            return view('welcome');
    }
}
