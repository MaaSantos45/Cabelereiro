<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"></script>
    <title>SERVICOS</title>
</head>
<body class="bg-dark">
    <?php
        include 'conexao.php';
        include 'navbar.php';
    ?>
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <?php
            $result = $mysqli->query("SELECT * FROM `servicos`");
            if ($result === false) {
                echo "Erro na consulta: " . mysqli_error($mysqli);
            } else {
                while ($query = $result->fetch_assoc()) {
                    echo "<p style='color:white;'>" . $query["id_servico"] . "</p>";
                    echo "<p style='color:white;'>" . $query["servico"] . "</p>";
                    echo "<p style='color:white;'>" . $query["descricao"] . "</p>";
                    echo "<p style='color:white;'>" . $query["valor"] . "</p>";
                }
            }
            mysqli_close($mysqli);
            ?>
        </div>
    </div>
</body>
</html>