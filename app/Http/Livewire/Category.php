<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CategoryModel;

class Category extends Component
{
    public function render()
    {
        return view('livewire.category');
    }
         public function OpenAddCategoryModal(){
           //  alert('hi');
        $this->name = '';
         $this->dispatchBrowserEvent('OpenAddCategoryModal');
    }

        public function save(){


        $this->validate([

             'name'=>'required|unique:categories',

        ]);

        $save = CategoryModel::insert([
              //'continent_id'=>$this->continent,
              'name'=>$this->name,
             // 'capital_city'=>$this->capital_city,
        ]);

        if($save){
            $this->dispatchBrowserEvent('CloseAddCategoryModal');
            $this->checkedCountry = [];
        }
    }
}
