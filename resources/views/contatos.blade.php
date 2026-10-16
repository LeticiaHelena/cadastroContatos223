<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Lista de Contatos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="background-color: #386D7B;">
    <div class="row" style="margin-left: 50px; margin-top: 50px; margin-right: 50px;">
        <div class="col-sm-6">
            <div class="card" style="background-color: #6998A7; color:white">
                <div class="card-body">
                    <h5 class="card-title">Cadastrar Novo Contato</h5>
                    <form action="{{ url('/save') }}" method="POST">
                        @csrf <!-- Token de segurança no laravel p/ POST -->
                        <div class="form-group">
                            <label>Nome</label>
                            <input class="form-control rounded-pill" type="text" name="nome" required>
                        </div>

                        <div class="form-group">
                            <label>Telefone:</label>
                            <input class="form-control rounded-pill" type="text" name="telefone" required placeholder="(00) 0000-0000">
                        </div>
                        <div class="form-group">
                            <label>E-mail:</label>
                            <input class="form-control rounded-pill" type="text" name="email" required placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label>Endereço:</label>
                            <input class="form-control rounded-pill" type="text" name="endereco" required>
                        </div>
                        <button type="submit" class="btn" style="background-color: #386D7B; color:white; margin-left: auto">Salvar Contato</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title; align-text: center">Contatos salvos</h5>
                    <ul class="list-group list-group-flush">
                        @foreach($contatos as $c)
                        <li class="list-group-item"><strong>{{$c->nome}}</strong> - {{$c->telefone}} | {{$c->email}} | {{$c->endereco}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>