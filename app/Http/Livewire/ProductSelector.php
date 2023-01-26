<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\CartService;

class ProductSelector extends Component
{
    public function render()
    {
        return view('livewire.product-selector');
    }

    public function addProductToCart(int $productId){
        CartService::addProduct($productId);
        $this->emit('shoppingCartUpdate');
        $this->emit('addProductSuccefully');
    }

    public function removeProductFromCart(int $productId){
        // $this->emit('swal', 'are u sure?', 'warning');
        $this->emitTo('shopping-cart','removeAllOfTheseProductsWithId',['productId'=>$productId]);
         $this->emit('remove');
    }

     public function alertConfirm()
    {
        $this->dispatchBrowserEvent('swal:confirm', [
                'type' => 'warning',
                'message' => 'Are you sure?',
                'text' => 'If deleted, you will not be able to recover this item!'
            ]);
    }
}
