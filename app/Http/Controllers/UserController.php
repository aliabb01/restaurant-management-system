<?php

namespace App\Http\Controllers;
use Auth;
use App\User;

use Image;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        $users =User::all();
        return view('my-profile',['users'=>$users]);
    }
   

    public function edit(Request $request, $user)
    {
        $users=User::findOrFail($user);
        return view('proedt')->with('users',$users);
    }
    //
    public function update(Request $request,   $user)
    {
      
     ///   $cities = city::findOrFail($city);

     //   $cities->update($request->all());
       $cit2=User::find($user);
     // $cities=city::all();
       $cit2->id=$request['id'];
       $cit2->name=$request['name'];
       $cit2->email=$request['email'];
       $cit2->city=$request['city'];
       $cit2->street=$request['street'];
       $cit2->zip_code=$request['zip_code'];
       $cit2->apartment_NO=$request['apartment_NO'];
       $cit2->building_NO=$request['building_NO'];
       $cit2->district=$request['district'];
    //   DB::update('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
 $cit2->save();
 

 //
       //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
   ///   $cities->save();
        //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
   // $cities->save();

  
       return redirect('my-profile');
    }
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
