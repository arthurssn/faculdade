<!doctype html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" rel="stylesheet">
    <title>Atividade de Desenvolvimento WEB</title>
</head>
<body>
<div class="container">
    <h1>Formulário IBGE</h1>
    <form action="recebe_dados.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="nome">Nome</label>
            <input class="form-control" id="nome" type="text" name="nome" >
        </div>
        <div class="mb-3">
                <label class="form-label" for="sobrenome">Sobrenome</label>
                <input class="form-control" id="sobrenome" type="text" name="sobrenome">
        </div>
        <div class="mb-3">
            <label class="form-label" for="idade">Idade</label>
            <input class="form-control" id="idade" type="number" name="idade" min="0">
        </div>
        <div class="mb-3">
            <label class="form-label" for="pai">Nome do pai</label>
            <input class="form-control" id="pai" type="text" name="nome_pai" >
        </div>
        <div class="mb-3">
            <label class="form-label" for="mae">Nome da mae</label>
            <input class="form-control" id="mae" type="text" name="nome_mae" >
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" id="email" type="email" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label" for="senha">Senha</label>
            <input class="form-control" id="senha" type="password" name="senha" >
        </div>
        <div class="mb-3">
            <label class="form-label" for="telefone">Telefone</label>
            <input class="form-control" id="telefone" type="tel" name="telefone">
        </div>
        <div class="mb-3">
            <label class="form-label" for="pais">País</label>
            <input class="form-control" id="pais" type="text" name="pais">
        </div>
        <div class="mb-3">
            <label class="form-label" for="estado">Estado</label>
            <input class="form-control" id="estado" type="text" name="estado">
        </div>
        <div class="mb-3">
            <label class="form-label" for="municipio">Municipio</label>
            <input class="form-control" id="municipio" type="text" name="municipio">
        </div>
        <div class="mb-3">
            <label class="form-label" for="bairro">Bairro</label>
            <input class="form-control" id="bairro" type="text" name="bairro">
        </div>
        <div class="mb-3">
            <label class="form-label" for="logradouro">Logradouro</label>
            <input class="form-control" id="logradouro" type="text" name="logradouro">
        </div>
        <div class="mb-3">
            <label class="form-label" for="rua">Rua</label>
            <input class="form-control" id="rua" type="text" name="rua">
        </div>
        <div class="mb-3">
            <label class="form-label" for="numero_casa">Nº</label>
            <input class="form-control" id="numero_casa" type="text" name="numero_casa">
        </div>

        <button class="btn btn-primary" type="submit" name="btnSubmit">Salvar</button>
    </form>
</div>
</body>
</html>