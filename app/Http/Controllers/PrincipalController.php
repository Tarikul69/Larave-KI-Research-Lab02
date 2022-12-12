<?php

namespace App\Http\Controllers;

use App\Models\news01;
use App\Models\project01;
use App\Models\publications01;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //News-POST..........................................................
    public function newspost(Request $req){
        $req->validate([
            'name' => 'required | max: 50',
            'notice' => 'required | max: 10000',
        ]);

        $abc = DB::table('news01')->insert([
            'id'=>$req->input('id'),
            'name'=>$req->input('name'),
            'notice'=>$req->input('notice'),
        ]);
        if($req){
            return back()->with('Success', 'News Inserted Successfuly');
        }else{
            return back()->with('Fail', 'Failed to insert data');
        } 
       // return view('dashboard.news');
    }

    //Delete-News
    public function deletenews(Request $req, $id){
        DB::table('news01')-> where('id', '=', $id)->delete();
        //return redirect()->back('Success1');
    if($req){
            return back()->with('message', 'News Deleted Successfuly');
        }else{
            return back()->with('Fail', 'Failed to delete data');
        }  
    }
    //Edit-news
    public function editnews($id){
        $data = news01::find($id);
        return view('dashboard.editnews', compact('data'));
    }
    //Update-News
    public function updatenews(Request $req, $id){
         $id = $req->id;
         $name = $req -> input('name');
         $notice = $req -> input('notice');
         $is_update = news01::where('id', $id)->update(['name'=>$name, 'notice'=>$notice]);

         if($req){
            return back()->with('Success', 'News Inserted Successfuly');
        }else{
            return back()->with('Fail', 'Failed to insert data');
        }
    }

    //Project.................................................
    public function project(Request $req){
        $req->validate([
            'name' => 'required | max: 50',
            'notice' => 'required | max: 10000',
        ]);

        $abc = DB::table('project01')->insert([
            'id'=>$req->input('id'),
            'name'=>$req->input('name'),
            'notice'=>$req->input('notice'),
        ]);
        if($req){
            return back()->with('Success', 'Project Inserted Successfuly');
        }else{
            return back()->with('Fail', 'Failed to insert data');
        } 
       // return view('dashboard.news');
    }

    //Edit Project
    public function editproject($id){
        $data = project01::find($id);
        return view('dashboard.editproject', compact('data'));
    }
    public function updateproject(Request $req, $id){
        $id = $req->id;
         $name = $req -> input('name');
         $notice = $req -> input('notice');
         $is_update = project01::where('id', $id)->update(['name'=>$name, 'notice'=>$notice]);

         if($req){
            return back()->with('Success', 'Project Updated Successfuly');
        }else{
            return back()->with('Fail', 'Failed to insert data');
        }
    }
 
     //Delete-Project
    public function deleteproject(Request $req, $id){
        DB::table('project01')-> where('id', '=', $id)->delete();
        //return redirect()->back('Success1');
    if($req){
            return back()->with('message', 'Project deleted successfuly');
        }else{
            return back()->with('Fail', 'Failed to delete data');
        }  
    }

    //Publications............................................................

    public function publication(Request $req){
        $req->validate([
            'name' => 'required | max: 50',
            'notice' => 'required | max: 10000',
        ]);

        $abc = DB::table('publication01')->insert([
            'id'=>$req->input('id'),
            'name'=>$req->input('name'),
            'notice'=>$req->input('notice'),
        ]);
        if($req){
            return back()->with('Success', 'Publication Inserted Successfuly');
        }else{
            return back()->with('Fail', 'Failed to insert data');
        } 
       // return view('dashboard.news');
    }

    //Edit-publication
    public function editpublication($id){
        $data = publications01::find($id);
        return view('dashboard.editpublication', compact('data'));
    }
    //Update-Publication
    public function updatepublication(Request $req, $id){
        $id = $req->id;
         $name = $req -> input('name');
         $notice = $req -> input('notice');
         $is_update = publications01::where('id', $id)->update(['name'=>$name, 'notice'=>$notice]);

         if($req){
            return back()->with('Success', 'Publication Updated successfuly');
        }else{
            return back()->with('Fail', 'Failed to Update Publication');
        }
    }
     //Delete-Publication
    public function deletepublication(Request $req, $id){
        DB::table('publication01')-> where('id', '=', $id)->delete();
        if($req){
                return back()->with('message', 'Data deleted successfuly');
            }else{
                return back()->with('Fail', 'Failed to delete data');
            }  
    }

}
