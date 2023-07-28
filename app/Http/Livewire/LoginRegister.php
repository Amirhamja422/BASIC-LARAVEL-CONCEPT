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
    public function render()
    {
        return view('livewire.login-register');
    }
}
