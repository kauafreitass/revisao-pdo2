<?php
if(!empty($_POST)){
    include_once __DIR__ . "/../../Controller/TarefaController.php";
    $controller = new TarefaController();
    $controller->editar();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa</title>
</head>
<body>
    <form action="#" method="POST">
    <textarea name="descricao" placeholder="descrição do produto"></textarea>
    <input name="id" type="hidden" value="<?=$_GET['id']?>"></>
    <button type="submit">Editar Tarefa</button>
    </form>
</body>
</html>