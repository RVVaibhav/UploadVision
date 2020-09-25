<?php

namespace Vision\Http\Controllers;

use Illuminate\Http\Request;
use Vision\TestCategory;
use Vision\VideoCategory;
use Vision\QuestionCategory;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)  {
        //
    }

    public function index(){
      //    Country::all()->pluck('name', 'id')
      return view('categoryTab.indexCategory');
        //   return view('test.indextest',compact('items'));
       }

       public function store(Request $request) {
         $tabId = $request->input('id');
         if($tabId == 1){
           $this->validate($request, [
                     'test_cat' => 'required',
                  ]);
              $post = new TestCategory;
              $post->test_cat = $request->input('test_cat');
              $post->admin_id = auth()->user()->id;
              $post->save();

             return redirect('/category')->with('success', 'TestCategory Add Successfully!');
         }else if($tabId == 2) {
           $this->validate($request, [
                     'video_cat' => 'required',
                  ]);
              $post = new VideoCategory;
              $post->video_cat = $request->input('video_cat');
              $post->admin_id = auth()->user()->id;
              $post->save();

             return redirect('/category')->with('success', 'VideoCategory Add Successfully!');
         }else {
           $this->validate($request, [
                     'question_cat' => 'required',
                  ]);
              $post = new QuestionCategory;
              $post->question_cat = $request->input('question_cat');
              $post->admin_id = auth()->user()->id;
              $post->save();

             return redirect('/category')->with('success', 'QuestionCategory Add Successfully!');
         }

     }

     public function storeVideo(Request $request) {



   }

}