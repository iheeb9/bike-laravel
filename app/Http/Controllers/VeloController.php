<?php

namespace App\Http\Controllers;

use App\Http\Requests\VeloFormRequest;
use App\Models\Category;
use App\Models\Velo;
use Illuminate\Http\Request;

class VeloController extends Controller
{
  public function index()
  {
    return view('content.velo.ListeVelo');
  }

  public function create()
  {
    $categories = Category::all();
    return view('content.velo.AjouterVelo', compact('categories'));
  }

  public function ajouter(VeloFormRequest $request)
  {

    /*    $velo = new Velo();
      $velo-> nom =$request->nom;
      $velo-> serie =$request->serie;
      $velo-> categorie_id =$request->categorie_id;
      $velo->save();


    );*/

    $velo = new Velo();
    $velo->nom = $request->nom;
    $velo->serie = $request->serie;
    $velo->quantite = $request->quantite;
    $velo->description = $request->description;
    $velo->categorie_id = $request->categorie_id;
    $velo->prix_heure = $request->prix_heure;
    $velo->Disponibilite = $request->Disponibilite;


      $velo->save();
    if($request->hasFile('image')) {
      $uploadPath = 'uploads/velo/';
      $i = 1;
      foreach ($request->file('image') as $imageFile) {
        $extention = $imageFile->getClientOriginalExtension();
        $filename = time() . $i++ . '.' . $extention;
        $imageFile->move($uploadPath, $filename);
        $finalImagePathName = $uploadPath . $filename;

        $velo->veloImages()->create([
          'velo_id' => $velo->id,
          'image' => $finalImagePathName,
        ]);
      }

    }

      /*$validatedData = $request->validated();
      $category = Category::findOrFail(['categorie_id']);
      $velo = $category->Velo()->create([
        'categorie_id'=> $validatedData['categorie_id'],
             'nom'=> $validatedData['nom'],
            'serie'=> $validatedData['serie'],
            'quantite'=> $validatedData['quantite'],
            'description'=> $validatedData['description'],
            'prix_heure'=> $validatedData['prix_heure'],
            'Disponibilite'=> $validatedData['Disponibilite'],
          ]);
         if($request->hasFile('image')){
            $uploadPath = 'uploads/velo/';
              $i= 1;
            foreach ($request->file('image') as $imageFile){
              $extention =$imageFile->getClientOriginalExtension();
              $filename =time().$i++.'.'.$extention;
              $imageFile->move($uploadPath,$filename);
              $finalImagePathName=$uploadPath.$filename;

              $velo->veloImages()->create([
                'velo_id'=>$velo->id,
                'image'=>$finalImagePathName,
              ]);
            }
          }*/

      return redirect('/admin/velo')->with('message', 'Velo ajouter avec succee');


    }



}
