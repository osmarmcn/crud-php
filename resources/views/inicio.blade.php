<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
   <form action="/cadastrar-produtos" method="POST">
    @csrf


    <label for="">Nome do produto:</label>
    <input type="text" name="nome">
    <br>

    <label for="">Estoque do produto:</label>
    <input type="text" name="estoque">
    <br>

    <label for="">Valor do produto:</label>
    <input type="text" name="valor">
    <br>

    <button>Enviar</button>
   </form>
</body>
</html>