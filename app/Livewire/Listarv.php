<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Vehicle;


#[Title('Listar')] 
class Listarv extends Component
{
    public function render()
    {
        $vehicles = Vehicle::all();
        return view('livewire.listarv', compact('vehicles'));
    }
}