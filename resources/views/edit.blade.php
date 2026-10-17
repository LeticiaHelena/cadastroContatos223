<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color: #386D7B;">
    <div class="row" style="margin-left: 50px; margin-top: 50px; margin-right: 50px;">
        <div class="card">
            <div class="card-header">
                Editar Contato
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <form action="{{url('/update/' . $c->id)}}" method="POST" style="margin: 0">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Nome</label>
                            <input class="form-control rounded-pill" type="text" name="nome" value="{{$c->nome}}" required>
                        </div>

                        <div class="form-group">
                            <label>Telefone:</label>
                            <input class="form-control rounded-pill" type="text" name="telefone" value="{{$c->telefone}}"required placeholder="(00) 0000-0000">
                        </div>
                        <div class="form-group">
                            <label>E-mail:</label>
                            <input class="form-control rounded-pill" type="text" name="email" value="{{$c->email}}" required>
                        </div>
                        <div class="form-group">
                            <label>Endereço:</label>
                            <input class="form-control rounded-pill" type="text" name="endereco" value="{{$c->endereco}}" required>
                        </div>
                        <button type="submit" class="btn" style="background-color: #386D7B; color:white; margin-left: auto">Alterar Contato</button>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>