<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Editar;
use Livewire\Attributes\Title;
use App\Models\User;


#[Title('Listar')] 
class Listar extends Component
{
    public $nid;
    public $name;
    public $email;
    public $password;
    public $cpf;
    public $phone;

    public function render()
    {
        $users = User::all();
        return view('livewire.listar', compact('users'));
    }

    public function deleteUser($id){
        User::find($id)->delete();
        $this->render();
    }

    public function updateUser($id){
        $this->nid = $id;
        $user = User::find($id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->cpf = $user->cpf;
        $this->phone = $user->phone;

        return redirect()->route('editar', compact('this'));
    }
}