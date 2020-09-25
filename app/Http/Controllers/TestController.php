<?php
namespace Vision\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Storage;
use Log;
use Vision\Headers;
use Illuminate\Support\Facades\DB;
use Vision\AddTest;

class TestController extends Controller{


    public function create(){
    $items = Headers::getHeaders();
    return view('test.indextest',['items' => $items]);

 }

 public function store(Request $request) {


                  $post = new AddTest;
                  if($request->radio == 'YES'){
                    $post->is_view_correct_answers_allowed = 1;
                  }elseif ($request->radio == 'NO')   {
                    $post->is_view_correct_answers_allowed = 0;
                  }
                  if($request->radios == 'Paid'){
                    $post->test_group = 1;
                  }elseif ($request->radios == 'Free')   {
                    $post->test_group = 0;
                  }
                //  $post->is_view_correct_answers_allowed = $post->allow_view;
                  $post->test_name = $request->input('testname');
                  $post->description = $request->input('description');
                  $post->start_date = $request->input('startdate');
                  $post->expire_date = $request->input('enddate');
                  $post->duration = $request->input('duration');
                  $post->attempt_limit = $request->input('allow_max');
                  $post->min_percent = $request->input('min_percent');
                  $post->correct_score = $request->input('correctScore');
                  $post->incorrect_score = $request->input('incorrect');
                  $post->test_category = $request->input('category');
                  $post->admin_id = auth()->user()->id;
                  $post->total_marks = $request->input('totalm');
                  $post->num_questions = $request->input('numQue');
                  $post->test_header_1_id = $request->input('country_id');
                  $post->test_header_2_id = $request->input('city');
                  $post->test_header_3_id = $request->input('setting');
                  $post->test_header_4_id = $request->input('setting');
                  $post->save();
                  return redirect('/test')->with('success', 'Test Created');


     }



  public function index(){
//    Country::all()->pluck('name', 'id')
     $category = DB::table('test_category')->pluck('test_cat','id');
     $items = DB::table('test_header_1')->pluck('header_1','test_header_1_id');
     return view('test.indextest',compact('items','category'));
 }

   public function myformAjax($id){
       $cities = DB::table("test_header_2")
                   ->where("test_header_1_id",$id)
                   ->get();
       return json_encode($cities);
   }

   public function myformAjaxs($id){
       $cities = DB::table("test_header_3")
                   ->where("test_header_2_id",$id)
                   ->get();
       return json_encode($cities);
   }




    //return response()->json(['html' => $html]);
}
