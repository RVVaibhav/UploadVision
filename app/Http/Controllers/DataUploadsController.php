<?php

namespace Vision\Http\Controllers;

use Illuminate\Http\Request;

use Vision\Questions;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Vision\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Vision\PdfPost;

class DataUploadsController extends Controller{
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
      $items = DB::table('question_category')->pluck('question_cat','id');
      return view('uploads.indexUploads',compact('items'));
        //   return view('test.indextest',compact('items'));
   }

   public function importFileIntoDB(Request $request){
     if($request->hasFile('sample_file')){
     $path = $request->file('sample_file')->getRealPath();
     $data = \Excel::load($path)->get();
     if($data->count()){
         foreach ($data as $key => $value) {
             $arr[] = ['subject_group_id' =>$request->input('question_type'), 'question_type' => $value->question_type,'question' => $value->question,
           'option_1' => $value->option_1,'option_2' => $value->option_2,'option_3' => $value->option_3,'option_4' => $value->option_4,'option_5' => $value->option_5,
         'correct_option' => $value->correct_option,'questions_selection_count' => $value->questions_selection_count,'admin_id' =>auth()->user()->id ,'description' => $value->description];
         }
         if(!empty($arr)){
             DB::table('question_bank')->insert($arr);
             dd('Insert Record successfully.');
         }
     }
 }
 dd('Request data does not have any files to import.');
 }

 public function downloadExcelFile($type){
    $products = Questions::get()->toArray();
    return \Excel::create('questionbank', function($excel) use ($products) {
        $excel->sheet('sheet name', function($sheet) use ($products)
        {
            $sheet->fromArray($products);
        });
    })->download($type);
}

public function fileUploadPost(Request $request){
    $request->validate([
        'sample_file' => 'required|mimes:pdf,xlx,csv|max:2048',
    ]);
     if($request->hasFile('sample_file')){
    $cover = $request->file('sample_file');
    $extension = $cover->getClientOriginalExtension();
    $fileNameToStore= '/uploads/'.'pdf-'.time().'.'.$extension;
    Storage::disk('public')->put($fileNameToStore,File::get($cover));
  } else {
      $fileNameToStore = 'noimage.jpg';
  }
    $post = new PdfPost;
    $post->title = $request->input('pdf_title');;
    $post->pdf_cat = $request->input('question_type');
    $post->admin_id = auth()->user()->id;
    $post->materials = $fileNameToStore;
    $post->thumbimage = $fileNameToStore;
    $post->save();
    return back()

      ->with('success','You have successfully upload file.')
      ->with('file',$fileNameToStore);

  //  return redirect('/vedio')->with('success', 'Vedio Created');





}

}
