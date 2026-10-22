<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Registrar</div>
            <div class="card-body">
                <form wire:submit="register">
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Nome</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" wire:model="name">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" wire:model="email">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Senha</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" wire:model="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirmar Senha</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control" id="password_confirmation" wire:model="password_confirmation">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="cpf" class="col-md-4 col-form-label text-md-end text-start">CPF</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('cpf') is-invalid @enderror" id="cpf" wire:model="cpf">
                            @if ($errors->has('cpf'))
                                <span class="text-danger">{{ $errors->first('cpf') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end text-start">Telefone</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" wire:model="phone">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <button type="submit" class="col-md-3 offset-md-5 btn btn-primary">
                            Registrar
                       </button>
                    </div>
                </form>
                <div class="mb-3 row"> 
                    <span wire:loading class="col-md-3 offset-md-5 text-primary">Processando...</span>
                </div>
            </div>
        </div>
    </div>    
</div>