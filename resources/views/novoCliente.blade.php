<html>
<head>
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <style>
        body{
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
                            Cadastro de Cliente
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('salvar.cliente') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nome">Nome do Cliente</label>
                                <input class="form-control" type="text" name="nomeCliente" id="nomeCliente" placeholder="Nome do Cliente" />
                            </div>

                            <div class="form-group">
                                <label for="idade">Idade do Ciente</label>
                                <input class="form-control" type="number" name="idadeCliente" id="idadeCliente" placeholder="Idade do Cliente" />
                            </div>

                            <div class="form-group">
                                <label for="endereco">Endereço</label>
                                <input class="form-control" type="text" name="enderecoCliente" id="enderecoCliente" placeholder="Endereço do Cliente" />
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input class="form-control" type="text" name="emailCliente" id="emailCliente" placeholder="E-mail do Cliente" />
                            </div>

                            <button class="btn btn-primary btn-sm" type="submit">Salvar</button>
                            <button class="btn btn-danger btn-sm" type="cancel">Cancelar</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </main>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>