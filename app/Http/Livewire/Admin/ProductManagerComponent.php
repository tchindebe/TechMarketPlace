<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ProductManagerComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.product-manager-component')->layout('layouts.app');
    }
}
