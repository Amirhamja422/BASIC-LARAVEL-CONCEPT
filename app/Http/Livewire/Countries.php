<?php

namespace App\Http\Livewire;
use App\Models\Continent;
use App\Models\Country;

use Livewire\Component;

class Countries extends Component
{
    public function render()
    {
        return view('livewire.countries',[
        'continents'=>Continent::orderBy('continent_name','asc')->get(),
        'countries'=>Country::orderBy('country_name','asc')->get()
    ]);
    }

    public function OpenAddCountryModel(){
    //   dd('ji');

    $this->dispatchBrowserEvent('OpenAddCountryModel');
    }
}
