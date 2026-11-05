<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

#[Title('Editar')] 
class Editar extends Component
{
    public $nid;

    #[Validate('required|string|min:3|max:250')]
    public $name;

    #[Validate('required|email|max:250')]
    public $email;

    #[Validate('required|string|min:11|max:11')]
    public $cpf;

    #[Validate('required|string|min:8')]
    public $phone;
    

    public function update()
    {
        $validated = $this->validate();
        $user = User::findOrFail($this->nid);
        $user->update([
            'name'  => $this->name,
            'email' => $this->email,
            'cpf'   => $this->cpf,
            'phone' => $this->phone,
        ]);

        session()->flash('message', 'Usuário editado');
 
        return $this->redirectRoute('listar', navigate: true);
    }

    public function mount(Request $request)
    {
        $this->nid = $request->input('valt.nid');
        $this->name = $request->input('valt.name');
        $this->email = $request->input('valt.email');
        $this->cpf = $request->input('valt.cpf');
        $this->phone = $request->input('valt.phone');
    }

    public function render(Request $request)
    {        
        return view('livewire.editar');
    }

}