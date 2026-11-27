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

    public function deleteVehicle($id){
        Vehicle::find($id)->delete();
        session()->flash('message', 'Veículo deletado');
        $this->render();
    }

    public function updateVehicle($id){
        $this->nid = $id;
        $vehicle = Vehicle::find($id);
        $this->brand = $vehicle->brand;
        $this->model = $vehicle->model;
        $this->plate = $vehicle->plate;
        $this->year = $vehicle->year;
        $this->status = $vehicle->status;
        $this->user_id = $vehicle->user_id;

        $valt = $this;
        
        return redirect()->route('editarv', compact('valt'));
    }
}