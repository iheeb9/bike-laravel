<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
     public function index(){
        return view('content.category.ListeCategories');
     }

     public function create(){
        return view('content.category.Ajoutercategorie');
     }

     public function ajouter (CategoryFormRequest $request){
          $validatedData =$request->validated();

          $category= new Category();
            $category->nom =$validatedData['nom'];
            $category->slug =Str::slug($validatedData['slug']);
            $category->description =$validatedData['description'];
            $category->meta_title =$validatedData['meta_title'];
            $category->meta_description =$validatedData['meta_description'];
            $category->meta_keyword =$validatedData['meta_keyword'];
              //dump($category);
            $category->save();

       /* $category = new Category();
        $category-> nom =$request->nom;
        $category-> slug =$request->slug;
        $category-> description =$request->description;
        $category-> meta_title =$request->meta_title;
        $category-> meta_description =$request->meta_description;
        $category-> meta_keyword =$request->meta_keyword;*/

       $category->save();

            return redirect('/admin/category')->with('message','Categorie ajouter avec succès');


     }



}
