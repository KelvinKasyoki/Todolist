<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;

class CreatesController extends Controller
{


     public function home(){
         $articles = Article::all();
         return view ('home',['articles' =>$articles]);

     }





     public function add(Request $request ){
         $this->validate($request, [
             'task' => 'required',
             'description' => 'required'
         ]);
         $articles = new  Article;
         $articles->task=$request->input('task');
         $articles->description=$request->input('description');
         $articles->save();
         return redirect('/')->with('info','Articles saved sucessfully!!');
      
    }




    public function update($id){
        $articles = Article::find($id);
        return view ('update',['articles' =>$articles]);
    }




    public function edit(Request $request,$id)
    {
        
        $this->validate($request, [
            'task' => 'required',
            'description' => 'required'
        ]);
        $data=array(
            'task'=>$request->input('task'),
            'description'=>$request->input('description')
        );
        Article::where('id', $id)
        ->update($data);
        return redirect('/')->with('info','Articles updated sucessfully!!');
    }





    public function read($id)
    {
        $articles = Article::find($id);
        return view ('read', ['articles' =>$articles]); 
    }



    public function delete($id)
    {
        Article::where('id', $id)   
        ->delete();
        return redirect('/')->with('info','Articles deleted sucessfully!!');
    }
}
    