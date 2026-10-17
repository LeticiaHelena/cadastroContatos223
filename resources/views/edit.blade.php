<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color: #386D7B;">
    <div style="margin-left: auto; margin-top: 150px; margin-right: auto; max-width: 540px;">
        <div class="card mb-3">
            <div class="card-header">
                Editar Contato
            </div>
            <div class="card-body align-items-center">
                <ul class="list-group list-group-flush">
                    <form action="{{url('/update/' . $contato->id)}}" method="POST" style="margin: 0">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Nome</label>
                            <input class="form-control rounded-pill" type="text" name="nome" value="{{$contato->nome}}" required>
                        </div>

                        <div class="form-group">
                            <label>Telefone:</label>
                            <input class="form-control rounded-pill" type="text" name="telefone" value="{{$contato->telefone}}"required >
                        </div>
                        <div class="form-group">
                            <label>E-mail:</label>
                            <input class="form-control rounded-pill" type="text" name="email" value="{{$contato->email}}" required>
                        </div>
                        <div class="form-group">
                            <label>Endereço:</label>
                            <input class="form-control rounded-pill" type="text" name="endereco" value="{{$contato->endereco}}" required>
                        </div>
                        <button type="submit" class="btn" style="background-color: #386D7B; color:white; margin-left: auto">Alterar Contato</button>
                    </form>
                </ul>
            </div>

        </div>
    </div>
</body>
</html>