<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductNameValidation extends Component
{
    public $name, $model_name;
    
    protected $rules = [
        'name' => 'max:255|required',
        'model_name' => 'max:255',
    ];

    public function updated()
    {
        $this->validate();
    }

    
    public function render()
    {
        return view('livewire.product-name-validation');
    }
}
