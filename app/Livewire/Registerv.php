<?php

namespace App\Livewire;

use App\Models\Vehicle;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

#[Title('Registro')] 
class Registerv extends Component
{
    #[Validate('required|string|min:3|max:250')]
    public $brand;

    #[Validate('required|string|min:3|max:250')]
    public $model;

    #[Validate('required|string|min:3|max:250')]
    public $plate;

    #[Validate('required|integer|min:4')]
    public $year;

    #[Validate('required|string|min:3|max:250')]
    public $status;

    #[Validate('required|integer|min:1')]
    public $user_id;

    public $password_confirmation;

    public function register()
    {
        $this->validate();
       
        Vehicle::create([
            'brand' => $this->brand,
            'model' => $this->model,
            'plate' => $this->plate,
            'year' => $this->year,
            'status' => $this->status,
            'user_id' => $this->user_id
        ]);

        session()->flash('message', 'Veículo cadastrado!');
 
        return $this->redirectRoute('dashboard', navigate: true);
    }

    public function render()
    {
        return view('livewire.registerv');
    }
}