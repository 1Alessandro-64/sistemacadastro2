<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Listar Usuários</div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>CPF</th>
                            <th>Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->cpf }}</td>
                                <td>{{ $user->phone }}</td>

                            </tr>
                        @empty
                            <div>Nenhum usuario</div>
                        @endforelse
                    </tbody>
                </table>

                <a href="{{ url('/dashboard') }}">Home</a>
            </div>
        </div>
    </div>    
</div>