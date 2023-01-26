<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\CartService;
use NotificationSweetAlert;


class ShoppingCart extends Component
{
    public $count=0;
    protected $listeners=[
        'shoppingCartUpdate'=>'eventCartUpdated',
        'removeAllOfTheseProductsWithId'=>'eventProductsNeedDelete',
        'remove','addProductSuccefully'
    ];

    public function render()
    {
        return view('livewire.shopping-cart');
    }

     public function mount(){
        $this->count=CartService::getProductCount();
    }

    public function eventCartUpdated()
    {
        $this->count=CartService::getProductCount();

    }

    public function eventProductsNeedDelete($params){
        $productId=$params['productId'];
        CartService::removeProductsWithId($productId);
        $this->count=CartService::getProductCount();

    }

     public function alertConfirm()
    {
        $this->dispatchBrowserEvent('swal:confirm', [
                'type' => 'warning',
                'message' => 'Are you sure?',
                'text' => 'If deleted, you will not be able to recover this item!'
            ]);
    }
    public function deleteConfirm()
    {
        $this->emit('swal', 'are u sure?', 'warning');
    }

public function remove()
    {   /*Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})*/
        /* Write Delete Logic */
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'Item deleted succefully!',
                'text' => 'It will not list on the table cart anymore.',
                'timer' =>'1500'
            ]);
    }

    public function addProductSuccefully()
    {
             $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'Item added succefully!',
                //'text' => ' will not list on the table cart anymore.',
                'timer' =>'1500'
            ]);
    }
}
