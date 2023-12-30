<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <br><br><br>
    <div class="container" style="background-color: lightgrey;">
        <form action="" method="post"> 
            <br><br>
            <h1 class="text-center" style="color: red;">MÊS DO ANO</h1>
            <label for="" class="form-label"></label>
            <br>
            <input type="number" name="mes_ano" class="form-control" placeholder="Forneça o mês do ano" min=1 max=12 required>
            <br>
            <button class="btn btn-success mt-2">ENVIAR</button>
            <br><br><br>
        </form>
   
        <?php
        $mes = filter_input(INPUT_POST, "mes_ano", FILTER_SANITIZE_NUMBER_INT);
        

        switch ($mes) {
            case 1:
                $alertColor = "info";
                $resposta = "ESTAMOS EM JANEIRO!";
                break;
            case 2:
                $alertColor = "primary";
                $resposta = "ESTAMOS EM FEVEREIRO!";
                break;
            case 3:
                $alertColor = "danger";
                $resposta = "ESTAMOS EM FEVEREIRO!";
                break;
            case 2:
                $alertColor = "success";
                $resposta = "ESTAMOS EM MARÇO!";
                break;
            case 4:
                $alertColor = "warning";
                $resposta = "ESTAMOS EM ABRIL!";
                break;
            case 5:
                $alertColor = "info";
                $resposta = "ESTAMOS EM MAIO!";
                break;
            case 6:
                $alertColor = "info";
                $resposta = "ESTAMOS EM JUNHO!";
                break;
            case 7:
                $alertColor = "info";
                $resposta = "ESTAMOS EM JULHO!";
                break;
            case 8:
                $alertColor = "info";
                $resposta = "ESTAMOS EM AGOSTO!";
                break;
            case 9:
                $alertColor = "info";
                $resposta = "ESTAMOS EM SETEMBRO!";
                break;
            case 10:
                $alertColor = "info";
                $resposta = "ESTAMOS EM OUTUBRO!";
                break;
            case 11:
                $alertColor = "info";
                $resposta = "ESTAMOS EM NOVEMBRO!";
                break;
            case 12:
                $alertColor = "info";
                $resposta = "ESTAMOS EM DEZEMBRO!";
                break;
            default;
                $alertColor = "info";
                $resposta = "DIGITE UM NÚMERO PARA SABER EM QUAL MES DO ANO ESTAMOS";
        }

        ?>
        <div class="alert alert-<?= $alertColor ?> fw-bold text-center">
            <?= $resposta ?>
        </div>
        <br><br>



    </div>
</body>

</html>