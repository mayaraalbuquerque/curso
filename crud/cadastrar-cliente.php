<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>


    <?php include 'header.php' ?>

    <div class="container mt-5">

        <h1>Cadastro de Cliente</h1>

        <!-- Nome, email, cpf, estao civil -->
        <form action="gravar-cliente.php" method="post">

            <div class="form-floating mb-3">
                <input type="text" required name="nome" class="form-control" id="nome" placeholder=" ">
                <label for="nome">Digite o nome</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" required name="email" class="form-control" id="email" placeholder=" ">
                <label for="nome">Digite o e-mail</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" required name="cpf" maxlength="11" class="form-control" id="cpf" placeholder=" ">
                <label for="cpf">Digite o cpf</label>
            </div>


            <div class="mb-3">
                <select name="estadocivil" required class="form-select" style="height: 60px">
                    <option value="" disabled selected>Estado Civil</option>
                    <option value="Solteiro(a)">Solteiro(a)</option>
                    <option value="Casado(a)">Casado(a)</option>
                    <option value="Divorciado(a)">Divorciado(a)</option>
                    <option value="Viúvo(a)">Viúvo(a)</option>
                </select>
            </div>

            <button class="btn btn-success">Realizar Cadastro</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>