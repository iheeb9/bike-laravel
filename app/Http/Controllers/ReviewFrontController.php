<?php

namespace App\Http\Controllers;

use App\Models\Balade;
use App\Models\Review;
use Dymantic\InstagramFeed\Exceptions\BadTokenException;
use Dymantic\InstagramFeed\Mail\FeedRefreshFailed;
use Dymantic\InstagramFeed\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Exception;

class ReviewFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ListReview = Review::all();

      return view('review.reviewFront',compact("ListReview"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
  protected $signature = 'instagram-feed:refresh {limit?}';

  protected $description = 'Refreshes all the authorized feeds with an optional number of feed items';

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function show(int $reviews)

  {


    $review=Review::find($reviews);

    $balades = Balade::find($review->balade_id);
    $posts = $review->posts;
    $wordCount = count($posts);
    return view('review.showfront',compact('review','balades','posts',"wordCount"));  }


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
    public function destroy($id)
    {
        //
    }
}
