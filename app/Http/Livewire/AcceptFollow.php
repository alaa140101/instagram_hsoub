<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AcceptFollow extends Component
{
    private $profile;
    public $profile_id;
    public $status;

    public function mount($profile_id) {

        $this->profile = User::find($profile_id);

        if($this->profile!=null && auth()->user()!=null) {
            auth()->user()->accepted($this->profile) ? $this->status = "Accepted" : $this->status = "Accept";
        }
    }


    public function toggleAccept($profile_id) {
        $this->profile = User::find($profile_id);

        if($this->profile!=null && auth()->user()!=null) {
            if(auth()->user()->accepted($this->profile)){
                auth()->user()->toggleAccepted($this->profile, false);
                auth()->user()->accepted($this->profile) ? $this->status = "Accepted" : $this->status = "Accept";
            }
            else {
                auth()->user()->toggleAccepted($this->profile, true);
                auth()->user()->accepted($this->profile) ? $this->status = "Accepted" : $this->status = "Accept";
            }
        }
    }

    public function render()
    {
        return view('livewire.accept-follow');
    }
}
