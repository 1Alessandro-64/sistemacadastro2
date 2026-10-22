<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\User;


#[Title('Listar')] 
class Listar extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.listar', compact('users'));
    }
}