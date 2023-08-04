<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Countries extends Component
{
    public function render()
    {
        return view('livewire.countries');
    }

    public function OpenAddCountryModel(){
    //   dd('ji');

    $this->dispatchBrowserEvent('OpenAddCountryModel');
    }
}
