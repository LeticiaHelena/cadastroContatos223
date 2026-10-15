<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lista de Contatos</title>
</head>
<body>
    <h1>Cadastrar Novo Contato</h1>

    <form action="{{ url('\save') }}" method="POST">
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
</body>
</html>
