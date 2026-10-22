<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Registrar</div>
            <div class="card-body">
                <form wire:submit="register">
                    <div class="mb-3 row">
                        <label for="brand" class="col-md-4 col-form-label text-md-end text-start">Marca</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" wire:model="brand">
                            @if ($errors->has('brand'))
                                <span class="text-danger">{{ $errors->first('brand') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="model" class="col-md-4 col-form-label text-md-end text-start">Modelo</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" wire:model="model">
                            @if ($errors->has('model'))
                                <span class="text-danger">{{ $errors->first('model') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="plate" class="col-md-4 col-form-label text-md-end text-start">Placa</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('plate') is-invalid @enderror" id="plate" wire:model="plate">
                            @if ($errors->has('plate'))
                                <span class="text-danger">{{ $errors->first('plate') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="year" class="col-md-4 col-form-label text-md-end text-start">Ano</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" wire:model="year">
                            @if ($errors->has('year'))
                                <span class="text-danger">{{ $errors->first('year') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="status" class="col-md-4 col-form-label text-md-end text-start">Status</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" wire:model="status">
                            @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="user_id" class="col-md-4 col-form-label text-md-end text-start">Cliente</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id" wire:model="user_id">
                            @if ($errors->has('user_id'))
                                <span class="text-danger">{{ $errors->first('user_id') }}</span>
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