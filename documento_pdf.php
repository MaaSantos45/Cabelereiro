<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>AGENDAMENTO</title>
</head>

<body class="bg-dark">
    <?php
    include 'conexao.php';
    include 'navbar.php';
    ?>

    <div class="container mt-2">

        <div class="mt-4 bg-secondary  rounded-3">
            <div class="row">
                <p class="text-light col-12 mt-2 ms-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut tempora quas inventore odio eos dignissimos ipsa reiciendis nisi provident repellat.</p>
            </div>
            <div class="row justify-content-center">
                <form action="servicos.php" class="col-sm-1 "><input  type="submit" class="btn btn-dark btn-outline-light text-light fw-bold " name="voltar" value="VOLTAR"></form>
                <form action="#" class="col-sm-1 ms-5 "><input  type="submit" class="btn btn-warning btn-outline-light text-light fw-bold " name="boleto" value="BOLETO"></form>
            </div>
        </div>
            
        </div>
    </div>
</body>
</html>