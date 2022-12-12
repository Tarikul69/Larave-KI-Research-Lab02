<?php

namespace App\Http\Controllers;

use App\Models\news01;
use App\Models\project01;
use App\Models\publications01;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class uicontroller extends Controller
{
    //home
    public function home(){
        return view('ui.home');
    }
    //news
    public function news(){
        $data = DB::table('news01')->orderBy('id', 'desc')->paginate(5);
        return view('ui.news', compact('data'));
    }
    //news details
    /* public function newsdetails($id)
    { 
        $data = news01::find($id)->get();
        return view ('ui.newsdetails', compact('data'));
    } */ 
    //News-Public-UI
    public function newsdetails($id)
    {
        $data = news01::find($id);
        return view('ui.newsdetails', compact('data'));
    } 
    public function news12($id){
        $data = news01::find($id);
        return view('ui.news12', compact('data'));
    }
    //project
    public function project(){
        $data = DB::table('project01')->orderBy('id', 'desc')->paginate(5);
        return view('ui.project', compact('data'));
    }
    public function projectdetails($id){
        $data = project01::find($id);
        return view('ui.projectdetails', compact('data'));
    }
    //publication
    public function publication(){
        $data = DB::table('publication01')->orderBy('id', 'desc')->paginate(5);
        return view('ui.publication', compact('data'));
    }
    public function publicationdetails($id){
        $data = publications01::find($id);
        return view('ui.publicationdetails', compact('data'));
    }
    //team 
    public function team(){
        $data = DB::table('users')->orderBy(column:'role_type')->get();
        return view('ui.team',compact('data'));
    }
    //contact
    public function contact(){
        return view('ui.contact');
    }
    //join
    public function join(){
        return view('ui.join');
    }
    //Contact mail
    /* public function sendmail(Request $req){

        $req->validate([

        ]);

        //Mail::
    } */
}
