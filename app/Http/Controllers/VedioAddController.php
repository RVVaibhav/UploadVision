<?php

namespace Vision\Http\Controllers;

use Illuminate\Http\Request;
use Vision\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
class VedioAddController extends Controller
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
        $items = DB::table('test_header_1')->pluck('header_1','test_header_1_id');
       $posts = Post::orderBy('created_at','desc')->paginate(30);
  //    Country::all()->pluck('name', 'id')
       return view('vedioTab.indexVedio',compact('posts','items'));
   }

   public function store(Request $request){
       $this->validate($request, [
          'vedioTitle' => 'required',
          'image' => 'required|mimes:mp4,mov,ogg,qt',
          'thumbimage' => 'required|image|mimes:jpg,png|max:2048',
          'startdate'=> 'required',
          'enddate' => 'required',
          'country_id'=> 'required',
          'city' => 'required',
          'countryt' => 'required',
       ]);

       // Handle File Upload
       if($request->hasFile('image')){
             // Get filename with the extension
             $cover = $request->file('image');
             $extension = $cover->getClientOriginalExtension();

             //$filenameWithExt = $request->file('image')->getClientOriginalName();
             // Get just filename
            // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
             // Get just ext
             //$extension = $request->file('image')->getClientOriginalExtension();
             // Filename to store
             $fileNameToStore= '/uploads/'.'vid-'.time().'.'.$extension;
          //   $path = $request->file('image')->storeAs('public/video', $fileNameToStore);
             Storage::disk('public')->put($fileNameToStore,  File::get($cover));
             // Upload Image
            // $path = $request->file('image')->storeAs('public/video', $fileNameToStore);
             //Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
         } else {
             $fileNameToStore = 'noimage.jpg';
         }
         if($request->hasFile('thumbimage')){
               // Get filename with the extension
               $cover = $request->file('thumbimage');
               $extension = $cover->getClientOriginalExtension();

               //$filenameWithExt = $request->file('image')->getClientOriginalName();
               // Get just filename
              // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
               // Get just ext
               //$extension = $request->file('image')->getClientOriginalExtension();
               // Filename to store
               $fileNameToStores= '/uploads/'.'thumb-'.time().'.'.$extension;
            //   $path = $request->file('image')->storeAs('public/video', $fileNameToStore);
               Storage::disk('public')->put($fileNameToStore,  File::get($cover));
               // Upload Image
              // $path = $request->file('image')->storeAs('public/video', $fileNameToStore);
               //Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
           } else {
               $fileNameToStores = 'noimage.jpg';
           }
       $post = new Post;
       $post->title = $request->input('vedioTitle');
       $post->start_date = $request->input('startdate');
       $post->expire_date = $request->input('enddate');
       $post->headers_one = $request->input('country_id');
       $post->headers_two = $request->input('city');
       $post->headers_three = $request->input('countryt');
       $post->admin_id = auth()->user()->id;
       $post->video = $fileNameToStore;
       $post->thumbimage = $fileNameToStores;
       $post->save();
       return redirect('/vedio')->with('success', 'Vedio Created');
   }

   public function show($id)
    {
        $posts = Post::find($id);
        return view('vedioTab.indexVedio',compact('posts'));
    }

    public function destroy($id){
      $gift = Post::findOrFail($id)->delete();
      return redirect('/vedio');
    }

    public function update(Request $request, $id) {
     $this->validate($request, [
        'vedioTitle' => 'required',
        'image' => 'required|mimes:mp4,mov,ogg,qt|max:500000',
        'startdate'=> 'required',
        'enddate' => 'required',
     ]);
       $post = Post::find($id);
        // Handle File Upload
       if($request->hasFile('image')){
           // Get filename with the extension
           $cover = $request->file('image');
           $extension = $cover->getClientOriginalExtension();
           //$filenameWithExt = $request->file('image')->getClientOriginalName();
           // Get just filename
          // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
           // Get just ext
           //$extension = $request->file('image')->getClientOriginalExtension();
           // Filename to store
           $fileNameToStore= '/uploads/'.'vid-'.time().'.'.$extension;
           Storage::disk('public')->put($fileNameToStore,  File::get($cover));
           // Delete file if exists
           Storage::delete('public/uploads/'.$post->vedio);
       }

       // Update Post
       $post->title = $request->input('vedioTitle');
       $post->visibleDate = $request->input('startdate');
       $post->endDate = $request->input('enddate');
       if($request->hasFile('image')){
         $post->vedio = $fileNameToStore;
         $post->thumbimage = $fileNameToStore;
       }
       $post->save();

       return redirect('/vedio')->with('success', 'Post Updated');
   }

}
