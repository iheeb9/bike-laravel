<?php

namespace App\Http\Controllers;

use App\Models\Balade;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{


  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    {
      $ListReview = Review::latest()->paginate(5);

      return view('review.review',compact("ListReview"));
    }
  }

  /**
   * Show the form for creating a new resource.
   *@param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $balades = Balade::all();
    return view('review.create',compact("balades"));
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
      'nom' => 'required',
      'Description' => 'required',
      'date' => 'required',
      'image' => 'required'
    ]);


    $name = $request->file('image')->hashName();
    request()->file('image')->move(public_path() . '/images/' , $name);
    $review=new \App\Models\Review();
    $review->nom=$request->nom;
    $review->Description=$request->Description;
    $review->date=$request->date;
    $review->balade_id=$request->balade_id;
    $review->image=$name;
    $review->save();

    return redirect()->route('review.index')->with('success','successsssssssssssss');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Review $review)
  {
    $balades = Balade::find($review->balade_id);
    $posts = $review->posts;
    return view('review.show',compact('review','balades','posts'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Review $review)
  {
    $balades = Balade::find($review->balade_id);



    return view('review.edit',compact('review','balades'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, int $id)
  {
    $request->validate([
      'nom' => 'required',
      'Description' => 'required',
      'date' => 'required',
      'image' => 'required',

    ]);

    $name = $request->file('image')->hashName();
    request()->file('image')->move(public_path() . '/images/' , $name);

    $review = ['nom'=>$request->nom,'Description'=>$request->Description,
      'date'=>$request->date,
      'image'=>$name];
    Review::whereId($id)->update($review) ;
    return redirect()->route('review.index')->with('success','successsssssssssssss');    }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(int $id)
  {
    $review = Review::find($id) ;

    $review->delete() ;

    return redirect()->route('review.index')
      ->with('success','review deleted successfully');
  }
}
