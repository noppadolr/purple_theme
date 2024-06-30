<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\User;



class Profile extends Component
{
    #[Title('Profile')]
    public function render()
    {
        $id = Auth::user()->id;

        return view('livewire.admin.profile',[
            'adminData' => User::find(Auth::id()),
        ]);
    }
}
