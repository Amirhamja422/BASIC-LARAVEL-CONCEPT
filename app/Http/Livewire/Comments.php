<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Carbon\Carbon;

class Comments extends Component
{

    // data show for manually generated comments

    public $comments =[
        [
            'body' =>'Dear sir',
            'created_at' =>'1 mins ago',
            'creator' =>'Mr Hacker',
        ]
    ];


    public $newComment;

    public function addComment(){

        //used for firstly data show after add

        array_unshift(
            $this->comments,[
                'body' =>$this->newComment,
                'created_at' =>Carbon::now()->diffForHumans(),
                'creator' =>'test peragrap by bosss jane ki'
        ]);
        $this->newComment ="";

        // data add for new comment

        // $this->comments[] = [
        //     'body' =>'we are sorry brother i am new',
        //     'created_at' =>'Dear sir',
        //     'creator' =>'3 mins ago'
        // ];


    }

    public function render()
    {
        return view('livewire.comments');
    }
}
