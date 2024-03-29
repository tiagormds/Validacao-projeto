<html>
<head>
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <style>
        body {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<main role="main">
    <div class="row">
        <div class="container col-sm-8 offset-md-2">
            <div class="card border">
                <div class="card-header">
                    <div class="card-title">
                        Cadastro de CLiente
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-hover" id="tabelaProdutos">
                        <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Idade</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->id }}</td>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->endereco }}</td>
                                <td>{{ $cliente->idade }}</td>
                                <td>{{ $cliente->email }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</main>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>