<?php

namespace Vision\Http\Controllers;

use Illuminate\Http\Request;

class ReadingStuffController extends Controller
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
    //  $items = DB::table('question_category')->pluck('question_cat','id');
      return view('readingStuff.indexReading');
        //   return view('test.indextest',compact('items'));
   }
}
