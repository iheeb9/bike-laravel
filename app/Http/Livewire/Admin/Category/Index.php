<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';
  public $category_id;

  public function Suppcategorie($category_id){
    dd($category_id);
    $this->category_id =$category_id;
  }
    public function Supprimercategorie(){
      $category =Category::find($this->category_id);
      $category->delete();
      session()->flash('message','Categorie est supprimé');
    }

  public function render()
    {
        $categories = Category::orderBy('nom','DESC');
        return view('livewire.admin.category.index',['categories' => $categories->paginate(1)]);
    }
}
