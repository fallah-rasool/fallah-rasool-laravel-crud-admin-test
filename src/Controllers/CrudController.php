<?php

namespace Fallah\Crud\Controllers;

use Fallah\Crud\Crud;
use Fallah\Crud\Models\post;
use Illuminate\Http\Request;

class CrudController  extends BaseController
{
      public function index(){

          $posts=post::paginate(3);

         // $merchantId=config('crud.merchantId');


          return view('crud::index',compact('posts'));
      }

      public function create(){
//        $db= post::create([
//             'title'=>"this is title 1",
//             'body'=>"this is body 1",
//             'email'=>"ali@gmail.com",
//             'phon'=>"9113470856",
//          ]);
//        return  $db;
          return view('crud::create');
      }

      public function store(Request $request){

          post::create([
                    'title'=>$request->get('title'),
                    'body'=>$request->get('body') ,
                    'email'=>$request->get('email') ,
                    'phon'=>$request->get('phon') ,
                ]);
          session()->flash('create','اطلاعات ثبت شد ')  ;
          return redirect()->route('crud.showPost');
      }

      public function show($id){

            $item= post::findorfail($id);
            return view('crud::show',compact('item'));

      }

      public function edit($id){

          $item= post::findorfail($id);
          return view('crud::edit',compact('item'));
      }

      public function update(Request $request,$id){
         //dd($post->id);
          $item= post::findorfail($id);

          $item->update([
              'title'=>$request->get('title'),
              'body'=>$request->get('body'),
              'email'=>$request->get('email'),
              'phon'=>$request->get('phon'),
          ]);

          return back();
      }

      public function destroy($id){

          post::findorfail($id)->delete()  ;

          session()->flash('delete','این پست با موفقیت حذف شد ')  ;
          return back();
      }
}
