<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lista de Contatos</title>
</head>
<body>
    <h1>Cadastrar Novo Contato</h1>

    <form action="{{ url('/save') }}" method="POST">
        @csrf <!-- Token de segurança no laravel p/ POST -->

        <label>Nome: </label><br>
         <input type="text" name="nome" required><br><br>

        <label>Telefone:</label><br>
        <input type="text" name="telefone" required><br><br>

        <label>E-mail:</label><br>
        <input type="text" name="email" required><br><br>

        <label>Endereço:</label><br>
        <input type="text" name="endereco" required><br><br>

        <button type="submit">Salvar Contato</button>

    </form>

    <hr>

    <h2>Contatos Salvos no Banco de Dados</h2>
    <ul>
        @foreach($contatos as $c)
            <li><strong>{{$c->nome}}</strong> - {{$c->telefone}} | {{$c->email}} | {{$c->endereco}}</li>
        @endforeach
    </ul>
</body>
</html>
