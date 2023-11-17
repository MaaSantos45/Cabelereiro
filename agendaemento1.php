<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"></script>
    <title>AGENDAMENTO</title>
</head>

<body class="bg-dark">
    <?php
    include 'conexao.php';
    include 'navbar.php';
    ?>

    <div class="container mt-2">
        <h3 class="text-warning">AGENDAMENTO</h3>
        <form class="card mt-1 p-3  " action="agendamento.php" method="POST">
            <div class="mb-3">
                <label for="NomeCompleto" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" name="NomeCompleto" placeholder="Insira o seu Nome">
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="tel" class="form-control" name="telefone" placeholder="( )____-____" autocomplete="off" oninput="autocompleteTelefone(this)">
            </div>
            <div class="mb-3">
                <p><label for="Data">Data e hora do agendamento <input type="datetime-local" name="Data"></label></p>
                <input type="submit" value="AGENDAR" name="Agendar" id="Agendar" class="btn btn-warning fw-bold"></input>
                
            </div>
            <script>
                function autocompleteTelefone(input) {
                    // Remove todos os caracteres não numéricos do valor atual
                    const numero = input.value.replace(/\D/g, '');

                    // Impede que mais números sejam adicionados após a formatação completa
                    if (numero.length > 11) {
                        input.value = input.value.slice(0, 13);
                        return;
                    }

                    // Adiciona a formatação automaticamente
                    let numeroFormatado = "(";

                    for (let i = 0; i < numero.length; i++) {
                        numeroFormatado += numero[i];
                        if (i === 1) {
                            numeroFormatado += ")";
                        } else if (i === 6) {
                            numeroFormatado += "-";
                        }
                    }

                    input.value = numeroFormatado;
                }
            </script>

            <?php
                //ini_set('display_errors', 1);
                //error_reporting(E_ALL);
               
                
                if (isset($_POST["Agendar"]) && (empty($_POST["NomeCompleto"]) or empty($_POST["telefone"]) or empty($_POST["Data"]))) {
                    echo "<p class='text-danger'>Houve um erro e nenhum dado foi inserido.</p><p>Verifique se todos os campos foram corrigidos</p>" . mysqli_error($connect);
                   
                } elseif (!empty($_POST["NomeCompleto"]) && !empty($_POST["telefone"]) && !empty($_POST["Data"])) { 
                    $nome = $_POST["NomeCompleto"];
                    $telefone = $_POST["telefone"];
                    $Data = $_POST["Data"];
                    $servicoSelecionado = $_SESSION['servico_id'];
                    echo "<p class='text-warning'>$nome <br> $telefone<br> $Data <br> $servicoSelecionado</p>";
                    $query = "INSERT INTO registro_agendado (`nomeC_comlpleto`, `telefoneC`, `data_agendamento`, `servico`) VALUES ('$nome', '$telefone', '$Data', '$servicoSelecionado')";
                    if (mysqli_query($connect, $query)) {
                        echo "<p class='text-success'>Os dados foram inseridos corretamente. Verifique o resultado na aba Exibir.</p>";
                    } else {
                        echo "<p class='text-danger'>Houve um erro.</p><p>Nenhum dado foi inserido.</p>" . mysqli_error($connect);
                    }
                } else {
                    echo "<p class='text-warning fw-bold mt-2'>Preste atenção e preencha todos os campo corretamente !!!!</p>";
                }
                
                mysqli_close($connect);
                ?>

        </form>
    </div>

   
</body>

</html>