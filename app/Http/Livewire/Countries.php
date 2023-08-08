<?php

namespace App\Http\Livewire;
use App\Models\Continent;
use App\Models\Country;

use Livewire\Component;


## view page
class Countries extends Component
{
    public $continent, $country_name, $capital_city;
    public $up_continent, $up_country_name, $up_capital_city,$cid;
     protected $listeners = ['delete'];

    public function render()
    {
        return view('livewire.countries',[
        'continents'=>Continent::orderBy('continent_name','asc')->get(),
        'countries'=>Country::orderBy('country_name','asc')->get()
    ]);
    }



    ## Insert start
    public function save(){
    // dd('hi');
    $this->validate([
        'continent'=>'required',
        'country_name'=>'required|unique:countries',
        'capital_city'=>'required'
   ]);


   $save =Country::insert([
      'continent_id'=>$this->continent,
      'country_name'=>$this->country_name,
      'capital_city'=>$this->capital_city
     ]);


     if($save){
      $this->dispatchBrowserEvent('CloseAddCountryModel');
     }
    }

    public function OpenAddCountryModel(){
     $this->continent ="";
     $this->country_name ="";
     $this->capital_city ="";

    $this->dispatchBrowserEvent('OpenAddCountryModel');
    }

    ## update start
    public function OpenEditCountryModal($id){
        $info =Country::find($id);
        $this->up_continent = $info->continent_id;
        $this->up_country_name = $info->country_name;
        $this->up_capital_city = $info->capital_city;
        $this->cid = $info->id;
        $this->dispatchBrowserEvent('OpenEditCountryModal',[
            'id'=> $id
        ]);
    }


    public function update(){
     $cid = $this->cid;
     $this->validate([
        'up_continent'=>'required',
        'up_country_name'=>'required|unique:countries,country_name,'.$cid,
        'up_capital_city'=>'required'
     ],[
       'up_continent.required'=>'You must select continent',
       'up_country_name.required'=>'You must select country name',
       'up_capital_city.required'=>'You must select capital city',

     ]);

      $update =Country::find($cid)->update([
      'continent_id'=>$this->up_continent,
      'country_name'=>$this->up_country_name,
      'capital_city'=>$this->up_capital_city
      ]);

      if($update){
        $this->dispatchBrowserEvent('CloseEditCountryModel');
       }

    }

    ## delete start
    public function deleteConfirm($id){
        // dd($id);
      $info =Country::find($id);
      $this->dispatchBrowserEvent('SwalConfirm',[
        'title' => 'Are You sure',
        'You want to delete <strong>'.$info->country_name.'</strong>',
        'id'=>$id

      ]);

    }

    public function delete($id){
    $del =  Country::find($id)->delete();
     if($del){
        $this->dispatchBrowserEvent('deleted');

     }
    }

}
