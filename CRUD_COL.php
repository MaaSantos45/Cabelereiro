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
    <title>CRUD || COTROLADOR COLABORADORES</title>
</head>
<body class="bg-dark align-items-start">
    <?php
    include('conexao.php');
    include('navbar.php'); 
    ?>
    <?php
                            if (isset($_POST["id_DEL"])) {
                                $id = $_POST["id_DEL"];
                                $query = "DELETE FROM cadastro_colaboradores WHERE id_colaborador='" . $id . "';";
                                if (mysqli_query($connect, $query) && isset($_POST["id_DEL"])) {
                                    echo "<p class='text-success'>Os dados foram excluídos corretamente.</p>";
                                } else if (!mysqli_query($connect, $query) && !isset($_POST["id_DEL"])) {
                                    echo "<p class='text-danger'>Houve um erro.</p><p>Nenhum dado foi excluído.</p>" . mysqli_error($connect);
                                }
                            }
                        ?>

    <div class="container">
        <h2 class="text-danger fw-bold mt-2">CADASTRO DOS COLABORADORES</h2>
                <div class="row mt-4 text-info" id="painel">
                    <table class="table col-sm-12 table-light rounded-3">
                        <thead>
                            <tr>
                                <th class="col-sm-1">ID</th>
                                <th class="col-sm-2">NOME DO COLABORADOR</th>
                                <th class="col-sm-2">IDADE</th>
                                <th class="col-sm-3">CARGO</th>
                                <th class="col-sm-2">SALARIO</th>
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
                            $result = $connect->query("SELECT * from `cadastro_colaboradores`;");
                            if (isset($_POST["alterar"])) {
                                while ($query = $result->fetch_assoc()) {
                                    if($_POST['alterar'] == $query["id_colaborador"]){
                                        echo "<form action='CRUD_COL.php' method='post'>";
                                        echo "<tr style='font-size:100%;'>";
                                        echo " <td > <input type='number' name='id_ALT' value='" . $query["id_colaborador"] . "'></td>";
                                        echo "<td> <input type='text'name='nome_ALT' value='" . $query["nomeC_colaborador"] . "'></td>";
                                        echo "<td> <input type='text'name='telefone_ALT' value='" . $query["idade_colaborador"] . "'></td>";
                                        echo "<td> <input type='text'name='data_ALT' value='" . $query["cargo_colaborador"] . "'></td>";
                                        echo "<td> <input type='text'name='servico_ALT' value='" . $query["salario"] . "'></td>";
                                        echo "<td>
                                                    <input type='hidden' name='id_ALT' value='" . $query["id_colaborador"] . "'>
                                                    <input type='submit' value='DELETAR' class='btn btn-danger text-light fw-bold'>   
                                                </td>";
                                        echo "<td>
                                                <input type='hidden' name='voltar' value='" . $query["id_colaborador"] . "'>
                                                <input type='submit' value='VOLTAR' class='btn btn-primary text-light fw-bold'>  
                                            </td>
                                            <td>
                                                <input type='hidden' name='c_alterar' value='" . $query["id_colaborador"] . "'>
                                                <input type='submit' value='CONFIRMAR ALTERAÇÃO' class='btn btn-success text-light fw-bold'>   
                                            </td>";
                                        echo "</tr>
                                            </form>";
                                        
                                    }

                                }
                            } else  {    
                            while ($query = $result->fetch_assoc()) {
                                    echo "<tr style='font-size:85%;'>";
                                    echo " <td >" . $query["id_colaborador"] . "</td>";
                                    echo "<td>" . $query["nomeC_colaborador"] . "</td>";
                                    echo "<td>" . $query["idade_colaborador"] . " Anos</td>";
                                    echo "<td>  " . $query["cargo_colaborador"] . "</td>";
                                    echo "<td>  R$ " . $query["salario"] . "</td>";
                                    echo "<td >
                                            <form action='CRUD_COL.php' method='post'>
                                                <input type='hidden' name='id_DEL' value='" . $query["id_colaborador"] . "'>
                                                <input type='submit' value='DELETAR' class='btn btn-danger text-light fw-bold'>   
                                            </form></td>";
                                    echo "<td >
                                            <form action='CRUD_COL.php' method='post'>
                                                <input type='hidden' name='alterar' value='" . $query["id_colaborador"] . "'>
                                                <input type='submit' value='ALTERAR' class='btn btn-warning text-light fw-bold'>   
                                            </form>
                                        </td>";
                                    echo "</tr>";
                                }
                            }
                        ?>
                        </tbody>
                        </table>
                        <h2 class="text-primary fw-bold mt-2">CADASTRAR  UM COLABORADOR</h2>
                        <div class="card bg-body-tertiary">
                            <form action="CRUD_COL.php" class="mt-2" method="POST">
                                <div class="row">
                                    <label for="nomeC" class="col-sm-4">NOME_COLABORADOR: </label>
                                    <input type="text" name="nomeC" placeholder="Nome do Colaborador" class="col-sm-8 rounded-3">
                                </div>

                                <div class="row mt-1 form-group">
                                    <label for="idadeC" class="col-sm-4">IDADE:</label>
                                    <input type="number" class="col-sm-8 rounded-3" name="idadeC" placeholder="Idade do Colaborador"  rows="3">
                                </div>

                                <div class="row mt-1">
                                    <label for="cargoC" class="col-sm-4">CARGO: </label>
                                    <input list="cargoC" name="cargoC" class="col-sm-4">
                                    <datalist id="cargoC">
                                        <option value="Atendente">
                                        <option value="Cabelereiro">
                                        <option value="Faxineiro">
                                    </datalist>
                                </div>

                                <div class="row mt-1">
                                    <label for="salarioC" class="col-sm-4">Sálario: </label>
                                    <input type="number" step=0.01 name="salarioC" placeholder="Salario " class="col-sm-4 rounded-3">
                                </div>

                                <div class="row mt-3 mb-2">
                                    <input type="hidden" value="-1" name="id">
                                    <button type="submit" class="btn btn-info fw-bold col-sm-8 offset-sm-4 fs-6">ADICIONAR</button>
                                </div>
                    </div>
                    <?php
                    if (empty($_POST["nomeC"]) || empty($_POST["idadeC"]) || empty($_POST["cargoC"]) || empty($_POST["salarioC"])) {
                        echo "<p class='text-warning fw-bold fs-3'>Preste atençao e preencha todos os campos corretamente</p>";
                        exit;
                    } else {
                        $nome = $_POST["nomeC"];
                        $idade = $_POST["idadeC"];
                        $cargo = $_POST["cargoC"];
                        $salario = $_POST["salarioC"];

                        $query = "INSERT INTO cadastro_colaboradores(`nomeC_colaborador`,`idade_colaborador`,`cargo_colaborador`,`salario`) VALUES ('$nome', '$idade','$cargo','$salario')";
                        if ( mysqli_query($connect,$query)) {
                            echo "<p class='text-success'>Os dados foram inserido corretamente. Verifique o resultado na aba Exibir.</p>";
                        } else {
                            echo "<p class='text-danger'>Houve um erro.</p><p>Nenhum dado foi inserido.</p>" . mysqli_error($connect);
                        }
                    }
                    ?>
                    </form>
    </div>
</body>
</html>