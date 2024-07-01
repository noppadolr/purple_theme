<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Validate;

class Profile extends Component
{
    #[Title('Profile')]        
    #[Validate('required')]
        public $name;

    #[Validate('required')]
    public $username;

    #[Validate('required|email')] 
    public $email;


    #[Validate('nullable')]
    public $phone;

    #[Validate('nullable')]
    public $photo;


    public $adminData;
            
    public function mount(){
        $id = Auth::user()->id;
        $this->adminData = User::find(Auth::id());
        $this->name = $this->adminData->name;
        $this->email = $this->adminData->email;
        $this->username = $this->adminData->username;
    }//end method

    public function Updated()
    {
        $this->validate();
        $id = Auth::user()->id;
        $user = User::find(Auth::id());
        $user ->update([
            'phone' => $this->phone,
        ]);
        $this->resetErrorBag();
        $this->resetValidation();
        return redirect(route('admin.profile'));


        
    }
    
    public function render()
    {
     return view('livewire.admin.profile');
    }
}
