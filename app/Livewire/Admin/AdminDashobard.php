<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Title;
use Livewire\Component;

class AdminDashobard extends Component
{
    #[Title('Admin Panel')]
    public function render()
    {
        return view('livewire.admin.admin-dashobard');
    }
}
