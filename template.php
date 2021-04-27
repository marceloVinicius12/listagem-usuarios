<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="boostrap5/bootstrap.min.css" rel="stylesheet">
    <title>cadastro usuarios</title>
    <h1>cadastro de usuarios</h1>

</head>
<body>
    <form>
        <div class="rounded mx-auto d-block">
            <div class="form-group-center text-center ">
            <img src="img/avatar.png"><br><br>
                <label for="usuario">usuario</label>
                <input type="name" name="usuario" id="usuario">
                <label for="senha">Senha</label>
                <input type="password" name="senha" maxlength="8" id="senha">
                <div class="form-check">
                    <label class="form-check-label" for="administrador">
                        <input class="form-check-input" type="checkbox" name="administrador" value="sim" id="administrador">administrador</label>
                    <br><br>
                    <button type="submit" class="btn btn-primary">cadastrar</button>
    </form>
    </div>
    </div>

    <br>
    <table class="table">
    
        <thead>
            <tr>
                <th>usuario</th>
                <th>administrador</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sqlBusca = "SELECT * FROM tb_usuarios";
            $resultado = mysqli_query($conexao, $sqlBusca);
            $cadastrados = [];
            while($cadastro = mysqli_fetch_assoc($resultado)){
                $cadastrados[] = $cadastro;
                //echo "<pre>";
                //print_r($resultado);
                //echo "</pre>";
            }
            foreach($cadastrados as $cadastro) : ?>
                <tr>
                    <td><?php echo $cadastro['usuario']; ?></td>
                    
                    <td><?php echo $cadastro['administrador']; ?></td>
                   
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <script src="boostrap5/bootstrap.min.js"></script>
   
</body>

</html>