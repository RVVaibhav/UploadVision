<?php

namespace Vision\Http\Controllers;

use Illuminate\Http\Request;
use Vision\Questions;
use Vision\Quiz;
use Illuminate\Support\Facades\DB;
class TestQuestionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index(){
      //    Country::all()->pluck('name', 'id')
      $items = DB::table('test_details')->pluck('test_name','test_id');
      $posts = Questions::orderBy('created_at','desc')->paginate(60);
      return view('testQuiz.indexTestQuiz',compact('posts','items'));
        //   return view('test.indextest',compact('items'));
       }


       public function store(Request $request){
        $tabId = $request->input('hid_test');
              $post = new Quiz;
              $post->test_id = $request->input('hid_test');
              $post->question_id = $request->input('id');
              $post->save();
              return redirect('/testQuiz');
       }

       public function update(Request $request, $id){
               $post = new Quiz;
               $post->test_id = $request->input('test_type');
               $post->question_id = $id;
               $post->save();

               return redirect('/testQuiz')->with('success', 'Heders update Successfully!');
          }

       public function myformAjax_test($id){
           $cities = DB::table("test_details")
                       ->where("test_name",$id)
                       ->get();
           return json_encode($cities);
       }

}
