<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class StoreComponent extends Component
{
    public function render()
    {

        return view('livewire.admin.store-component')
            ->layout('layouts.app');
    }
}
