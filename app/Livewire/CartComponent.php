<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CartItem;

class CartComponent extends Component
{
    public $itemId;
    public $quantity;

    public function mount()
    {
        $item = CartItem::find($this->itemId);
        $this->quantity = $item ? $item->quantity : 0;
    }

    public function updateQuantity()
    {
        $item = CartItem::find($this->itemId);

        if ($item) {
            $item->quantity = $this->quantity;
            $item->save();

            $this->redirect('cart', $item->id);
        }
    }

    public function render()
    {
        return view('livewire.cart-component');
    }
}



