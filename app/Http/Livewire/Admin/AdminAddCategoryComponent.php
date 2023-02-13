<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminAddCategoryComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-addcategory-component')->layout('layouts.base');
    }
}
