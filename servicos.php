<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <title>SERVICOS</title>
</head>

<body class="bg-dark">
    <?php
    include 'conexao.php';
    include 'navbar.php';
    ?>
        <h2 class="text-warning fw-bold mt-1 text-center border border-light bg-secondary container-fluid"> NOSSOS SERVIÇOS</h2>
        <div class="container ">
        <div class=" row  d-inline-flex justify-content-start ">
            <?php
            //ini_set('display_errors', 1);
            //error_reporting(E_ALL);
            session_start();

            $result = $connect->query("SELECT * FROM `servicos`");
        
            if ($result === false) {
                echo "Erro na consulta: " . mysqli_error($mysqli);
            } else {
                while ($query = $result->fetch_assoc()) {

                    echo "<div class='card mt-4 col-sm-4 rounded-4 border border-warning ms-4 me-5' style='width: 23rem;'>";
                    echo "<img class='card-img-top rounded-3 mt-2' src='" . $query["imagem_data"] . "'>";
                    echo "<div class='card-body '>";
                    echo "  <h5 class='card-title fw-bold'>" . $query["servico"] . "</h5>";
                    echo "  <p class='card-text' style='text-align:justify;'>" . $query["descricao"] . "</p>";
                    echo "  <div class='d-flex align-items-center'>";
                    echo "<a href='agendamento.php?id=". urlencode($query["id_servico"]) ."&servico=". urlencode($query['servico'])."' class='btn btn-warning border border-dark fw-bold p-1 me-2'>AGENDE AGORA</a>";
                    echo "    <div class='bg-success border border-dark fw-bold rounded-3 text-light p-1'>VALOR R$ " . $query["valor"] . "</div>";
                    echo "  </div>";
                    echo "</div>";
                    echo "</div>";
                }
                
            }
            mysqli_close($connect);
            ?>
        </div>


    </div>
    <?php include 'footer.php'; ?>

</body>

</html>