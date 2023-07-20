<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments =[
        [
            'body' =>'we are sorry brother i am new',
            'created_at' =>'Dear sir',
            'creator' =>'3 mins ago',
        ]
    ];
    public function render()
    {
        return view('livewire.comments');
    }
}
