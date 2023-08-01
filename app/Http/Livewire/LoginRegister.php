<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
class LoginRegister extends Component
{

    public $name;
    public $email;
    public $body;

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'body' => 'required',
        ]);

        Contact::create($validatedData);

        return redirect()->to('/formLogin');
    }

    public $contacts;
    public function mount(){
     $this->contacts = Contact::all();
    }




    public function render()
    {
        return view('livewire.login-register');
    }

    public function deleteId($id){
       Contact::find($id)->delete();
       return redirect()->to('/formLogin');

    //    $this>mount();
    }

}
