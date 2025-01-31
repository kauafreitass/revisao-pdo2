<?php
if(!empty($_POST)){
    include_once __DIR__ . "/../../Controller/TarefaController.php";
    $controller = new TarefaController();
    $controller->criar();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Tarefa</title>
</head>
<body>
    <form action="#" method="POST">
        <textarea name="descricao" placeholder="descrição da tarefa"></textarea>
        <button type="submit">Criar Tarefa</button>
    </form>
</body>
</html>