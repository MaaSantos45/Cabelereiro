<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    include('conexao.php');
  
    ?>
    
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>CRUD || COTROLADOR SERVIÇOS</title>
</head>

<body class="bg-dark align-items-start ">
   
<?php
      include('navbar.php');
?>

    <div class="container">
        <?php
        if (isset($_POST["id_DEL"])) {
            $id = $_POST["id_DEL"];
            $query = "DELETE FROM servicos WHERE id_servico='" . $id . "';";
            if (mysqli_query($connect, $query) && isset($_POST["id"])) {
                echo "<p class='text-success'>Os dados foram excluídos corretamente.</p>";
            } else if (!mysqli_query($connect, $query) && !isset($_POST["id"])) {
                echo "<p class='text-danger'>Houve um erro.</p><p>Nenhum dado foi excluído.</p>" . mysqli_error($connect);
            }
        }
        ?>
        <?php
        if (isset($_POST["c_alterar"]))  {
           
            if (empty($_POST["id_ALT"]) || empty($_POST["servico_ALT"]) || empty($_POST["descricao_ALT"]) || empty($_POST["valor_ALT"])) {
                echo "<p class='text-danger'>Preencha todos os campos corretamente</p>";
                exit;
            } else {
                $id = $_POST["id_ALT"];
                $servico = $_POST["servico_ALT"];
                $descricao = $_POST["descricao_ALT"];
                $valor = $_POST["valor_ALT"];

                $query = "UPDATE servicos SET servico='$servico', descricao='$descricao', valor='$valor' WHERE id_servico='$id';";
           
                if (mysqli_query($connect, $query) && isset($_POST["id_ALT"])) {
                    echo "<p class='text-success'>Os dados foram alterados corretamente.</p>";
                } else if (!mysqli_query($connect, $query) && !isset($_POST["id_ALT"])) {
                    echo "<p class='text-danger'>Houve um erro.</p><p>Nenhum dado foi alterado.</p>" . mysqli_error($connect);
                }
            }
            
    
        }
        
        ?>
        
        <h2 class="text-danger fw-bold mt-2">SERVIÇOS ARMAZENADOS</h2>
        <div class="row mt-4 text-info" id="painel">
            <table class="table col-sm-12 table-light rounded-3">
                <thead>
                    <tr>
                        <th class="col-sm-1">ID</th>
                        <th class="col-sm-3">SERVICO</th>
                        <th class="col-sm-4">DESCRIÇÃO</th>
                        <th class="col-sm-3">PREÇO</th>
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
                    $result = $connect->query("SELECT * FROM `servicos`");
                    if (isset($_POST["alterar"])) {
                        while ($query = $result->fetch_assoc()) {

                            if($_POST['alterar'] == $query["id_servico"]){
                                echo "<form action='CRUD_S.php' method='post'>";
                                echo "<tr style='font-size:100%;'>";
                                echo " <td > <input type='number' name='id_ALT' value='" . $query["id_servico"] . "'></td>";
                                echo "<td> <input type='text'name='servico_ALT' value='" . $query["servico"] . "'></td>";
                                echo "<td> <input type='text'name='descricao_ALT' value='" . $query["descricao"] . "'></td>";
                                echo "<td> <input type='text'name='valor_ALT' value='" . $query["valor"] . "'></td>";
                                echo "<td>
                                            <input type='hidden' name='id_ALT' value='" . $query["id_servico"] . "'>
                                            <input type='submit' value='DELETAR' class='btn btn-danger text-light fw-bold'>   
                                        </td>";
                                echo "<td>
                                        <input type='hidden' name='voltar' value='" . $query["id_servico"] . "'>
                                        <input type='submit' value='VOLTAR' class='btn btn-primary text-light fw-bold'>  
                                    </td>
                                    <td>
                                        <input type='hidden' name='c_alterar' value='" . $query["id_servico"] . "'>
                                        <input type='submit' value='CONFIRMAR ALTERAÇÃO' class='btn btn-success text-light fw-bold'>   
                                    </td>";
                                echo "</tr>
                                    </form>";
                            }else {
                                echo "<tr style='font-size:100%;'>";
                                echo " <td >" . $query["id_servico"] . "</td>";
                                echo "<td>" . $query["servico"] . "</td>";
                                echo "<td>" . $query["descricao"] . "</td>";
                                echo "<td> R$ " . $query["valor"] . "</td>";
                                echo "<td >
                                        <form action='CRUD_S.php' method='post'>
                                            <input type='hidden' name='id_DEL' value='" . $query["id_servico"] . "'>
                                            <input type='submit' value='DELETAR' class='btn btn-danger text-light fw-bold'>   
                                        </form></td>";
                                echo "<td>
                                        <form action='CRUD_S.php' method='post'>
                                            <input type='hidden' name='alterar' value='" . $query["id_servico"] . "'>
                                            <input type='submit' value='ALTERAR' class='btn btn-warning text-light fw-bold'>   
                                        </form>
                                    </td><td></td>
                                    ";
                                echo "</tr>";
                            }
                        }
                    } else  {
                        while ($query = $result->fetch_assoc()) {
                            echo "<tr style='font-size:100%;'>";
                            echo " <td >" . $query["id_servico"] . "</td>";
                            echo "<td>" . $query["servico"] . "</td>";
                            echo "<td>" . $query["descricao"] . "</td>";
                            echo "<td> R$ " . $query["valor"] . "</td>";
                            echo "<td >
                                    <form action='CRUD_S.php' method='post'>
                                        <input type='hidden' name='id_DEL' value='" . $query["id_servico"] . "'>
                                        <input type='submit' value='DELETAR' class='btn btn-danger text-light fw-bold'>   
                                    </form></td>";
                            echo "<td >
                                    <form action='CRUD_S.php' method='post'>
                                        <input type='hidden' name='alterar' value='" . $query["id_servico"] . "'>
                                        <input type='submit' value='ALTERAR' class='btn btn-warning text-light fw-bold'>   
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                    }
                    ?>


                    <small>OBS: Acesse <a href="servicos.php" class="text-danger">AQUI</a> para exibir os serviços </small>
                </tbody>

            </table>
            <h2 class="text-primary fw-bold mt-2">ADICIONAR UM SERVIÇO</h2>
            <div class="card bg-body-tertiary">
                <form action="CRUD_S.php" class="mt-2" method="POST">
                    <div class="row">
                        <label for="nomeS" class="col-sm-4">TITULO DO SERVIÇO: </label>
                        <input type="text" name="nomeS" placeholder="Nome do serviço" class="col-sm-8 rounded-3">
                    </div>

                    <div class="row mt-1 form-group">
                        <label for="descricaoS" class="col-sm-4">DESCRIÇÃO:</label>
                        <textarea class="col-sm-8 rounded-3" name="descricaoS" placeholder="Descrição" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="row mt-1">
                        <label for="valorS" class="col-sm-4">VALOR: </label>
                        <input type="number" step=0.01 name="valorS" placeholder="Valor" class="col-sm-4 rounded-3">
                    </div>

                    <div class="row mt-1">
                        <label for="imagemS" class="col-sm-4">IMAGEM/DATA: </label>
                        <input type="text" name="imagemS" placeholder="Endereço da imagem online: https://linkimagem" class="col-sm-8 rounded-3">
                    </div>

                    <div class="row mt-3 mb-2">
                        <input type="hidden" value="-1" name="id">
                        <button type="submit" class="btn btn-info fw-bold col-sm-8 offset-sm-4 fs-6">ADICIONAR</button>
                    </div>

            </div>
            <?php
            if (empty($_POST["nomeS"]) || empty($_POST["descricaoS"]) || empty($_POST["valorS"]) || empty($_POST["imagemS"])) {
                echo "<p class='text-warning fw-bold fs-3'>Preste atençao e preencha todos os campos corretamente</p>";
                exit;
            } else {
                $nome = $_POST["nomeS"];
                $descricao = $_POST["descricaoS"];
                $valor = $_POST["valorS"];
                $url_img = $_POST["imagemS"];

                $checkQuery = "SELECT COUNT(*) AS count FROM servicos WHERE servico = '$nome'";
                $checkResult = mysqli_query($connect, $checkQuery);
                $row = mysqli_fetch_assoc($checkResult);
                $count = $row['count'];

                if ($count > 0) {
                    echo "<p class='text-danger fw-bold fs-3'>Já existe um serviço com o mesmo nome.</p>";
                } else {
                    $query = "INSERT INTO servicos(`servico`,`descricao`,`valor`,`imagem_data`) VALUES ('$nome', '$descricao','$valor','$url_img')";
                    if (mysqli_query($connect, $query)) {
                        echo "<p class='text-success fw-bold fs-4'>Os dados foram inseridos corretamente. Recarregue a página para ver o serviço adicionado na tabela acima.</p>";
                    } else {
                        echo "<p class='text-danger fw-bold fs-3'>Houve um erro.</p><p>Nenhum dado foi inserido.</p>" . mysqli_error($connect);
                    }
                }
            }
            ?>
            </form>
        </div>
        <?php include 'footer.php'; ?>
    </div>
    
</body>

</html>