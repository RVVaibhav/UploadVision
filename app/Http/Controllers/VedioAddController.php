<?php

namespace Vision\Http\Controllers;

use Illuminate\Http\Request;
use Vision\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
       $posts = Post::orderBy('created_at','desc')->paginate(10);
  //    Country::all()->pluck('name', 'id')
       return view('vedioTab.indexVedio',compact('posts'));
   }


   public function store(Request $request){
       $this->validate($request, [
          'vedioTitle' => 'required',
          'image' => 'required|mimes:mp4,mov,ogg,qt|max:500000',
          'startdate'=> 'required',
          'enddate' => 'required',
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
             Storage::disk('public')->put($fileNameToStore,  File::get($cover));
             // Upload Image
            // $path = $request->file('image')->storeAs('public/video', $fileNameToStore);
             //Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
         } else {
             $fileNameToStore = 'noimage.jpg';
         }

       // Create Post
       $post = new Post;
       $post->title = $request->input('vedioTitle');
       $post->visibleDate = $request->input('startdate');
       $post->endDate = $request->input('enddate');
       $post->user_id = auth()->user()->id;
       $post->vedio = $fileNameToStore;
       $post->thumbimage = $fileNameToStore;
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