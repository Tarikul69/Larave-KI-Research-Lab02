<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Photo;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        $roletype =Auth::user()->role_type;

        if ($roletype == 'Principal Investigator')
        {
            return view('dashboard.principalinvastigator.dashboard ');

        }

        if ($roletype == 'Research Assistant')
        {
            return view('dashboard.teachingassistant.taDashboard');

        }

        else {
            //return view('auth.password.login');
            //return view('dashboard.principalinvastigator.dashboard ');
        }

       //return view('dashboard.dashboard');
    }

    //News.................................................
    public function news(){
        $data = DB::table('news01')-> orderBy('id', 'desc')->paginate(3);
        return view('dashboard.news', compact('data'));
    }
    public function newsui(){
        $data = DB::table('news01')->orderBy('id', 'desc')->get();
        return view('dashboard.news', compact('data'));
    }



    //project...............................................
    public function project(){
        $data = DB::table('project01')->orderBy('id', 'desc')->paginate(3);
        return view('dashboard.project', compact('data'));
    }



    //publication............................................
    public function publication(){
        $data = DB::table('publication01')->orderBy('id', 'desc')->paginate(3);
        return view('dashboard.publication', compact('data'));
    } 



    //team...................................................
    public function team(){
        $data = DB::table('users')->orderBy(column:'role_type')->get();
        return view('dashboard.team', compact('data'));
    }
    public function addteam(){
        return view('dashboard.addteam');
    }
    public function changestatus($id){
       $getStatus = users::select('role')-> where('id', $id)->first();

        if ($getStatus-> role == "1") {
            $role = "0"; 
        }else {
            
            $role = "1";
        }
        users::where('id',$id)->update(['role'=>$role]);
       // Toastr::success('Status Successfully changed', 'Success', ["PositionClass"=>]);
        return back()->with('Success', 'Status Successfully Changed');
     }
     public function teamDelete(Request $req,  $id){

            DB::table('users')-> where('id', '=', $id)->delete();
         if($req){
                return back()->with('message', 'Data deleted successfuly');
            }else{
                return back()->with('Fail', 'Failed to delete data');
            }  
        
     }
    public function addteam01(Request $req){
        $req->validate([
            'name'=>'required | max: 30',
            'email'=>'required | email',
            'password' => 'required',
            'role_type' => 'required',
            'bio' => 'required | max: 999',
            'photo' => 'required',
        ]);

         $photo = $req->file('photo');


         $unique_name=hexdec(uniqid());
         $photo_extention = strtolower($photo ->getClientOriginalExtension());
         $unique_photo =  $unique_name. '.'.$photo_extention;
         $upload_location = 'photo/';
         $path = $upload_location.$unique_photo;
         $photo ->move($upload_location, $unique_photo);

       

        $abc = DB::table('users')->insert([
            
            'name'=>$req->input('name'),
            'email'=>$req->input('email'),
            'password' => Hash::make($req->input('password')),
            'bio' => $req->input('bio'),
            'photo'=>$path,
            'role_type'=> $req->input('role_type'),
            ]);

        return redirect()->back();
    }

    public function editteam($id){
        return ('dashboard.editteam');
    }

    public function editteam01(Request $req){

        return ;
    }
}
