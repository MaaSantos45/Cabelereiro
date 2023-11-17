<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>ACESSO</title>
</head>

<body class="bg-dark">
    <?php
    include 'conexao.php';
    include 'navbar.php';
    ?>
    <div class="container mt-5 ">

        <div class="row d-flex justify-content-center">
            <h3 class="text-warning fw-bold text-center">ACESSO</h3>
            <form class="col-6 card" action="acesso.php" method="POST" style="width: 30rem;height: 18rem;">
                <div class="form-group">
                    <label for="email">Endereço de Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite o seu email">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" placeholder="Digite a sua senha">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Me deixar logado</label>
                </div>
                <button type="submit" class="btn btn-warning fw-bold">ENTRAR</button>
                <a href="" class="link-dark">Não possue uma conta? Crie uma agora</a>
            </form>
        </div>


</body>

</html>