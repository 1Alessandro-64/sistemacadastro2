<?php

namespace App\Livewire;

use App\Models\Vehicle;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

#[Title('Editar')] 
class Editarv extends Component
{
    public $nid;

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

    public function update()
    {
        $validated = $this->validate();
        $vehicle = Vehicle::findOrFail($this->nid);
        $vehicle->update([
            'brand' => $this->brand,
            'model' => $this->model,
            'plate' => $this->plate,
            'year' => $this->year,
            'status' => $this->status,
            'user_id' => $this->user_id
        ]);

        session()->flash('message', 'Veículo editado!');
 
        return $this->redirectRoute('listarv', navigate: true);
    }

    public function mount(Request $request)
    {
        $this->nid = $request->input('valt.nid');
        $this->brand = $request->input('valt.brand');
        $this->model = $request->input('valt.model');
        $this->plate = $request->input('valt.plate');
        $this->year = $request->input('valt.year');
        $this->status = $request->input('valt.status');
        $this->user_id = $request->input('valt.user_id');
    }

    public function render(Request $request)
    {        
        return view('livewire.editarv');
    }
}