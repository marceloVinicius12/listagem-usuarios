<!DOCTYPE html>
<html lang="en">

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
                <label for="name">usuario</label>
                <input type="name"  id="usuario">
                <label for="inputPassword4">Senha</label>
                <input type="password"  maxlength="8" id="senha">
                <div class="form-check">                
                <label class="form-check-label" for="gridCheck">               
                    <input class="form-check-input" type="checkbox"  value="sim" id="administrador">administrador
                   <br><br>
            <button type="submit" class="btn btn-primary">Entrar</button>
            </label>
             
    </form>
    <table class="table">
            <thead>
                <tr>    
                    <th>usuario</th>
                    <th>administrador</th>
                   
                </tr>
            </thead>
            <tbody>
</body>
<script src="boostrap5/bootstrap.min.js"></script>

</html>