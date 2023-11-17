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
    <title>CRUD || COTROLADOR CONTABILIADE</title>
</head>
<body class="bg-dark align-items-start">
    <?php
    include('conexao.php');
    include('navbar.php');
    ?>

    <div class="container">
            <h2 class="text-danger fw-bold mt-2">REGISTRO DE CONTABILIDADE</h2>
                <div class="row mt-4 text-info" id="painel">
                    <table class="table  table-light ">
                        <thead>
                            <tr style='font-size:90%;'>
                                <th class="col-sm-1">ID</th>
                                <th class="col-sm-1">TIPO DE TRANSAÇÃO</th>
                                <th class="col-sm-1">DESCRIÇÃO</th>
                                <th class="col-sm-1">VALOR</th>
                                <th class="col-sm-2">DATA DA TRANSAÇÃO</th>
                                <th class="col-sm-1">CATEGORIA</th>
                                <th class="col-sm-1">METODO DE PAGAMENTO</th>
                                <th class="col-sm-1">STATUS</th>
                                <th class="col-sm-1">DATA DE VENCIMENTO</th>
                                <?php
                            if(isset($_POST['alterar']))
                                echo"<th class='col-sm-1'></th>";
                            ?>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $receita = 0;
                            $saida = 0;

                            $result = $connect->query("SELECT * from `contabilidade`;");
                            while($query = $result->fetch_assoc()){
                                echo"<tr style='font-size:80%;'><td>".$query['id_cont']."</td>";
                                if($query['tipo_transacao']== "entrada"){
                                    echo"<td class='text-success fw-bold'>".$query['tipo_transacao']."</td>";
                                } else{
                                    echo"<td class='text-danger fw-bold'>".$query['tipo_transacao']."</td>";
                                }
                                echo"<td>".$query['descricao']."</td>";
                                if($query['tipo_transacao'] == "saida" && $query['status_pagamento'] == "pago"){
                                    echo"<td class='text-danger'> R$ - ".$query['valor']."</td>";
                                    $saida = $query['valor'] - $saida;
                                }else if($query['tipo_transacao'] == "entrada" && $query['status_pagamento'] == "pago"){
                                    echo"<td class='text-success'> R$ + ".$query['valor']."</td>";
                                    $receita = $query['valor'] + $receita;
                                }else{
                                    echo"<td class='text-secondary'> R$ -- ".$query['valor']."</td>";
                                }
                                echo"<td>".$query['data_transacao']."</td>";
                                echo"<td>".$query['categoria']."</td>";
                                echo"<td>".$query['metodo_pagamento']."</td>";
                                echo"<td>".$query['status_pagamento']."</td>";
                                echo"<td>".$query['data_vencimento']."</td>";
                                echo"</tr>";   
                            }

                            echo"<div class='row mb-3 bg-body-tertiary py-2 px-5 text-center'>
                            <label for='receita' class='col-sm-2 text-dark fw-bold'> ENTRADA TOTAL: </label>";
                            echo"<input type='text' class='bg-success col-sm-2 fw-bold text-light' name='receita' readonly value='R$ ".$receita."'>";
                            echo"<label for='saida' class='col-sm-2 ms-5 text-dark fw-bold'> SAIDA TOTAL: </label>";
                            echo"<input type='text' class='bg-danger col-sm-2  fw-bold text-light' name='saida' readonly value='R$ ".$saida."'></div>";
                        ?>
                        
                    </tbody>
                    
                        </table>
                        <h2 class="text-primary fw-bold mt-2">CADASTRAR UM REGISTRO DA CONTABILIDADE</h2>
                        <div class="card bg-body-tertiary">
                            <form action="CRUD_CON.php" class="mt-2" method="POST">
                                <div class="row ">
                                    <label for="tpt" class="col-sm-4">TIPO DE TRANSAÇÃO: </label>
                                    <input type="submit" name="tptE" value="ENTRADA" class=" me-5 col-sm-1 btn btn-success btn-outline-warning fw-bold rounded-3">
                                    <input type="submit" name="tptS" value="SAIDA" class=" ms-5 col-sm-1 btn btn-danger btn-outline-warning fw-bold rounded-3">
                                </div>
                            </form>
                            <?php
                                if(isset($_POST['tptE'])){
                                    echo"<form action='CRUD_CON.php' class='mt-2'method='POST'>
                                            <div class='row mt-1 form-group'>
                                            <label for='idadeC' class='col-sm-4'>IDADE:</label>
                                            <input type='number' class='col-sm-8 rounded-3' name='idadeC' placeholder='Idade do Colaborador'  rows='3'>
                                            </div>

                                            <div class='row mt-1'>
                                                <label for='cargoC' class='col-sm-4'>CARGO: </label>
                                                <input list='cargoC'  name='cargoC' class='col-sm-4'>
                                                <datalist id='cargoC'>";
                                                $result = $connect->query("SELECT * from `servicos`;");
                                                while($query = $result->fetch_assoc()) {
                                                    echo"<option value='".$query['servico']."'>";     
                                                }
                                            echo"</datalist>
                                            </div>

                                            <div class='row mt-1'>
                                                <label for='salarioC' class='col-sm-4'>Sálario: </label>
                                                <input type='number' step=0.01 name='salarioC' placeholder='Salario ' class='col-sm-4 rounded-3'>
                                            </div>

                                            <div class='row mt-3 mb-2'>
                                                <input type='hidden' value='-1' name='id'>
                                                <button type='submit' class='btn btn-info fw-bold col-sm-8 offset-sm-4 fs-6'>ADICIONAR</button>
                                            </div>";
                                } else{
                                    echo"<form action='CRUD_CON.php' class='mt-2'method='POST'>
                                            <div class='row mt-1 form-group'>
                                            <label for='idadeC' class='col-sm-4'>IDADE:</label>
                                            <input type='number' class='col-sm-8 rounded-3' name='idadeC' placeholder='Idade do Colaborador'  rows='3'>
                                            </div>

                                            <div class='row mt-1'>
                                                <label for='salarioC' class='col-sm-4'>Sálario: </label>
                                                <input type='number' step=0.01 name='salarioC' placeholder='Salario ' class='col-sm-4 rounded-3'>
                                            </div>

                                            <div class='row mt-3 mb-2'>
                                                <input type='hidden' value='-1' name='id'>
                                                <button type='submit' class='btn btn-info fw-bold col-sm-8 offset-sm-4 fs-6'>ADICIONAR</button>
                                            </div>";
                                }

                            ?>
            </div>
    </div>
        
</body>
</html>