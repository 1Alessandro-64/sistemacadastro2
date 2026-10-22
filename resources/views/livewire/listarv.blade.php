<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Listar Veículos</div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Placa</th>
                            <th>Ano</th>
                            <th>Status</th>
                            <th>Cliente</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($vehicles as $vehicle)
                            <tr>
                                <td>{{ $vehicle->id }}</td>
                                <td>{{ $vehicle->brand }}</td>
                                <td>{{ $vehicle->model }}</td>
                                <td>{{ $vehicle->plate }}</td>
                                <td>{{ $vehicle->year }}</td>
                                <td>{{ $vehicle->status }}</td>
                                <td>{{ $vehicle->user->name }}</td>

                            </tr>
                        @empty
                            <div>Nenhum veículo</div>
                        @endforelse
                    </tbody>
                </table>

                <a href="{{ url('/dashboard') }}">Home</a>
            </div>
        </div>
    </div>    
</div>