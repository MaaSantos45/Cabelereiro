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
    <title>CRUD || COTROLADOR AGENDAMENTOS</title>
</head>
<body class="bg-dark align-items-start">
    <?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    include('conexao.php');
    include('navbar.php');
    ?>
    <div class="container">
        <h2 class="text-danger fw-bold mt-2">REGISTRO DE AGENDAMENTOS ARMAZENADOS</h2>
            <div class="row mt-4 text-info" id="painel">
                <table class="table col-sm-12 table-light rounded-3">
                    <thead>
                        <tr>
                            <th class="col-sm-1">ID</th>
                            <th class="col-sm-2">NOME DO CLIENTE</th>
                            <th class="col-sm-2">TELEFONE</th>
                            <th class="col-sm-3">DATE E HORA DO AGENDAMENTO</th>
                            <th class="col-sm-2">SERVIÇO AGENDADO</th>
                            <th class="col-sm-2">PREÇO DO SERVIÇO</th>
                            <th class="col-sm-1"></th>
                            <th class="col-sm-1"></th>
                            <?php
                            if(isset($_POST['alterar']))
                                echo"<th class='col-sm-1'></th>";
                            ?>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $result = $connect->query("SELECT registro_agendado.id_cliente, registro_agendado.nomeC_comlpleto, registro_agendado.telefoneC, registro_agendado.data_agendamento, servicos.servico, servicos.valor from registro_agendado inner join servicos on servicos.id_servico = registro_agendado.servico; ");
                            if (isset($_POST["alterar"])) {
                                while ($query = $result->fetch_assoc()) {
                                    if($_POST['alterar'] == $query["id_cliente"]){
                                        echo "<form action='CRUD_A.php' method='post'>";
                                        echo "<tr style='font-size:100%;'>";
                                        echo " <td > <input type='number' name='id_ALT' value='" . $query["id_cliente"] . "'></td>";
                                        echo "<td> <input type='text'name='servico_ALT' value='" . $query["nomeC_comlpleto"] . "'></td>";
                                        echo "<td> <input type='text'name='descricao_ALT' value='" . $query["telefoneC"] . "'></td>";
                                        echo "<td> <input type='text'name='valor_ALT' value='" . $query["data_agendamento"] . "'></td>";
                                        echo "<td> <input type='text'name='valor_ALT' value='" . $query["servico"] . "'></td>";
                                        echo "<td> <input type='text'name='valor_ALT' value='" . $query["valor"] . "'></td>";
                                        echo "<td>
                                                    <input type='hidden' name='id_ALT' value='" . $query["id_cliente"] . "'>
                                                    <input type='submit' value='DELETAR' class='btn btn-danger text-light fw-bold'>   
                                                </td>";
                                        echo "<td>
                                                <input type='hidden' name='voltar' value='" . $query["id_cliente"] . "'>
                                                <input type='submit' value='VOLTAR' class='btn btn-primary text-light fw-bold'>  
                                            </td>
                                            <td>
                                                <input type='hidden' name='c_alterar' value='" . $query["id_cliente"] . "'>
                                                <input type='submit' value='CONFIRMAR ALTERAÇÃO' class='btn btn-success text-light fw-bold'>   
                                            </td>";
                                        echo "</tr>
                                            </form>";
                                        
                                    }

                                }
                            } else  {    
                            while ($query = $result->fetch_assoc()) {
                                    echo "<tr style='font-size:85%;'>";
                                    echo " <td >" . $query["id_cliente"] . "</td>";
                                    echo "<td>" . $query["nomeC_comlpleto"] . "</td>";
                                    echo "<td>" . $query["telefoneC"] . "</td>";
                                    echo "<td>  " . $query["data_agendamento"] . "</td>";
                                    echo "<td>  " . $query["servico"] . "</td>";
                                    echo "<td> R$ " . $query["valor"] . "</td>";
                                    echo "<td >
                                            <form action='CRUD_A.php' method='post'>
                                                <input type='hidden' name='id_DEL' value='" . $query["id_cliente"] . "'>
                                                <input type='submit' value='DELETAR' class='btn btn-danger text-light fw-bold'>   
                                            </form></td>";
                                    echo "<td >
                                            <form action='CRUD_A.php' method='post'>
                                                <input type='hidden' name='alterar' value='" . $query["id_cliente"] . "'>
                                                <input type='submit' value='ALTERAR' class='btn btn-warning text-light fw-bold'>   
                                            </form>
                                        </td>";
                                    echo "</tr>";
                                }
                            }
                        ?>
                    </tbody>
    </div>
   
</body>
</html>