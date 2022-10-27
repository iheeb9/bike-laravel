<?php

namespace App\Http\Controllers;

use App\Models\Balade;
use App\Models\Post;
use App\Models\Review;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ListPost = Post::latest()->paginate(5);

      return view('post.index',compact("ListPost"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('review.postCreate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'Subject' => 'required',
        'Commentaire' => 'required',
        'image' => 'required'
      ]);
      $name = $request->file('image')->hashName();
      request()->file('image')->move(public_path() . '/images/' , $name);
      $post=new \App\Models\Post();
      $post->Subject=$request->Subject;
      $post->Commentaire=$request->Commentaire;
      $post->image=$name;
      $post->user_id=$request->user;
      $post->review_id=$request->review;
      $post->save();
      return redirect()->route('clientreview.show',$request->review)->with('success','successsssssssssssss');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)

    { $balades = Balade::find($review->balade_id);
      $posts = $review->posts;
      return view('post.show',compact('review','balades','posts'));  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $idp)
    {
      $post = Post::find($idp) ;

      $post->delete() ;

      return  back()
        ->with('success','review deleted successfully');

    }
}
