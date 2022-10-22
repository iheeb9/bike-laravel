<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
     public function index(){
       $data =DB::table('categories')->orderBy('id','desc')->paginate(1);
        return view('content.category.ListeCategories',compact('data'));
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

     public  function editT(Category $category){
       dump($category);

       return view ('content.category.edit',compact('category'));
     }

     public function update (CategoryFormRequest $request, $category){
       $category = Category::findOrFail($category);

       $validatedData =$request->validated();

       $category->nom =$validatedData['nom'];
       $category->slug =Str::slug($validatedData['slug']);
       $category->description =$validatedData['description'];
       $category->meta_title =$validatedData['meta_title'];
       $category->meta_description =$validatedData['meta_description'];
       $category->meta_keyword =$validatedData['meta_keyword'];
       //dump($category);

       $category->update();

       return redirect('/admin/category')->with('message','Categorie Modifier avec succès');

     }

    public  function categories (){
      $data =DB::table('categories')->orderBy('id','desc')->paginate(2);
      return view('Client.content.home.categories',compact('data'));
    }

    public function productsofcategorie ($category_slug){
       $cat=Category::where ('slug',$category_slug)->first();
       if($cat){
          $vel=$cat->Velos()->paginate(2);
          return view ('Client.content.home.veloCat',compact('vel','cat'));
       }else{
         return redirect()->back();
       }
    }

  public function delete (int $cat_id){
    $category=Category::findOrFail($cat_id);
    $category->Velos->each->delete();
    $category->delete();
    return redirect()->back()->with('message', ' catgory supprimé');

  }

}
