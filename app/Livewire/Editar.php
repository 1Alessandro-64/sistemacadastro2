<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

#[Title('Editar')] 
class Editar extends Component
{
    #[Validate('required|string|min:3|max:250')]
    public $name;

    #[Validate('required|email|max:250|unique:users,email')]
    public $email;

    #[Validate('required|string|min:8|confirmed')]
    public $password;

    #[Validate('required|string|min:11|max:11')]
    public $cpf;

    #[Validate('required|string|min:8')]
    public $phone;

    public $password_confirmation;
    

    public function register()
    {
        $this->validate();
       
        User::update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'cpf' => $this->cpf,
            'phone' => $this->phone
        ]);

        session()->flash('message', 'Usuário editado');
 
        return $this->redirectRoute('listar', navigate: true);
    }

    public function render()
    {
        return view('livewire.editar');
    }
}