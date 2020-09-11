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
      $posts = Questions::orderBy('created_at','desc')->paginate(10);
      return view('testQuiz.indexTestQuiz',compact('posts','items'));
        //   return view('test.indextest',compact('items'));
       }


       public function destroy($id,$question_id){
        // $gift = AddHeders::findOrFail($id)->delete();
         return redirect('/testQuiz');
       }

}
