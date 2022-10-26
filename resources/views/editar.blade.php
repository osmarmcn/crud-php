<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
   <form action="/editar-produto/{{$produto->id}}" method="POST">
    @csrf


    <label for="">Nome do produto:</label>
    <input type="text" name="nome" value="{{$produto->nome}}">
    <br>

    <label for="">Estoque do produto:</label>
    <input type="text" name="estoque" value="{{$produto->estoque}}">
    <br>

    <label for="">Valor do produto:</label>
    <input type="text" name="valor" value="{{$produto->valor}}">
    <br>

    <button>atualizar produto</button>
   </form>
</body>
</html>