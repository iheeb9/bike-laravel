<?php

namespace App\Http\Controllers;

use App\Http\Requests\VeloFormRequest;
use App\Models\Category;
use App\Models\Velo;
use App\Models\VeloImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class VeloController extends Controller
{
  public function index()
  {
    $categories = Category::all();
    //$data = Velo::all();
    $data =DB::table('velos')->orderBy('id','desc')->paginate(1);

    return view('content.velo.ListeVelo', compact('data'));
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
    if ($request->hasFile('image')) {
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


  public function editT(int $velo_id)
  {
    $categories = Category::all();
    $v = Velo::findOrFail($velo_id);
    return view('content.velo.edit', compact('categories', 'v'));
  }

  public function update(VeloFormRequest $request, int $velo_id)
  {


    $velo = Velo::findOrFail($velo_id);

    if ($velo) {

      $velo->nom = $request->nom;
      $velo->serie = $request->serie;
      $velo->quantite = $request->quantite;
      $velo->description = $request->description;
      $velo->categorie_id = $request->categorie_id;
      $velo->prix_heure = $request->prix_heure;
      $velo->Disponibilite = $request->Disponibilite;
       $velo->update();
      if ($request->hasFile('image')) {
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

      } else {
        return redirect('admin/velo')->with('message', 'aucun Velo trouver');
      }
    return redirect('admin/velo')->with('message', 'Votre  Velo a ete modidier');


  }

      public function destroyImage (int $velo_image_id){
        $velo_Im=VeloImage::findOrFail($velo_image_id);
       // dd($velo_Im);
          if(File::exists($velo_Im->image)){
             File::delete($velo_Im->image);
         }
      $velo_Im->delete();
        return redirect()->back()->with('message', 'Image de velo supprimé');

      }

      public function delete (int $velo_id){
          $velo=Velo::findOrFail($velo_id);
          if($velo->veloImages()){
            foreach ($velo->veloImages as $images){
              if(File::exists($images->image)){
                File::delete($images->image);
              }
            }
          }
          $velo->delete();
        return redirect()->back()->with('message', ' velo supprimé');

      }

  public function indexfront()
  {
    $categories = Category::all();
    $data = Velo::all();
    return view('content.velo.ListVeloFront', compact('data'  ));
  }

  public function store (){
    $categories = Category::all();
  $data = DB::table('_velo_images')->distinct()
      ->join('velos','_velo_images.velo_id','=','velos.id')
      ->select('_velo_images.*','velos.*')
      ->orderBy('velo_id','desc')->paginate(2);

    return view('Client.content.home.store',compact('data','categories'));
         }

         public function details (int $velo_id )
              {
                $v = Velo::findOrFail($velo_id);
                if($v){
                  return view('Client.content.home.DetailsVelo',compact ('v'));
                }else{
                  return redirect()->back();
                }
                }


                public function searchProduct (Request $request){
                  $categories = Category::all();
                  if($request->search){
                     $searchVelo= Velo::where('nom','LIKE','%'.$request->search.'%')->latest()->paginate(1);
                     return view ('Client.content.home.searchVelo',compact('searchVelo','categories'));
                   }else{
                    redirect ('Client.content.home.store');
                   }

                }


  /*public function filtervelotByCategory($idCategory){
    $categories = Category::all();
    $category=Category::findOrFail($idCategory);
    if($category){
      $velo=$category->Velos()->get();
      return view('', compact('category', 'velo','categories'));
    }
    else{
      return redirect()->back();
    }
  }*/

}
