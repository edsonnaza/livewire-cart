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
    }

    public function removeProductFromCart(int $productId){
        $this->emitTo('shopping-cart','removeAllOfTheseProductsWithId',['productId'=>$productId]);
    }
}
